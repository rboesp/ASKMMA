<?php

namespace App\Http\Controllers;

use App\Exports\FeedbackExport;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\UserResource;
use App\Mail\FeedbackMail;
use App\Mail\ForgetPasswordMailable;
use App\Mail\ForgetPasswordSuccessMailable;
use App\Mail\GenericEmailMarkdown;
use App\Models\Feedback;
use App\OauthClients;
use App\ThirdPartyUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\HtmlString;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $users = User::all();

        return UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));
        $data['sunfire_access'] = ! blank($request->get('sunfire_access'));

        $user = new User($data);
        $user->save();

        if (! blank($request->get('sunfire_access'))) {
            $this->attachSunfireToUser($user->fresh()->id);
        }

        return redirect('/dashboard/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.admin.users.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = [];
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['npn'] = $request->get('npn');
        $data['zip'] = $request->get('zip');
        $data['phone'] = $request->get('phone');

        if (! blank($request->get('password'))) {
            $data['password'] = bcrypt($request->get('password'));
        }
        $data['sunfire_access'] = ! blank($request->get('sunfire_access'));

        $user->update($data);

        if (! blank($request->get('sunfire_access'))) {
            $this->attachSunfireToUser($user->id);
        }

        return redirect('/dashboard/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/dashboard/users');
    }

    public function removeThirdParty()
    {
        $user = Auth::user();
        $this->removeSunfire($user->id);

        return redirect('/dashboard');
    }

    private function removeSunfire($user_id)
    {
        $sunfire = OauthClients::whereName('Sunfire')->first();

        DB::table('oauth_access_tokens')
            ->select('oauth_access_tokens.*')
            ->where('oauth_access_tokens.user_id', $user_id)
            ->where('oauth_access_tokens.client_id', $sunfire->id)
            ->delete();
    }

    private function attachSunfireToUser($user_id)
    {
        $sunfire = OauthClients::whereName('Sunfire')->first();
        $thirdPartyUser = new ThirdPartyUser();
        $thirdPartyUser->user_id = $user_id;
        $thirdPartyUser->thirdparty_id = $sunfire->id;

        $thirdPartyUser->save();
    }

    private function detachSunfireToUser($user_id)
    {
        $sunfire = OauthClients::whereName('Sunfire')->first();
        ThirdPartyUser::whereUserId($user_id)->whereThirdpartyId($sunfire->id)->delete();

        $this->removeSunfire($user_id);
    }

    public function resetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = $request->get('email');
        $user = User::where('email', $email)->first();

        if (isset($user)) {
            $time = strtotime(date('Y-m-d H:i:s', strtotime('+1 days')));
            $email_enc = base64_encode($user->email);
            $token = $time.'@'.$email_enc;
            $token_exist = DB::table('password_resets')->where('email', $user->email)->first();
            if (isset($token_exist)) {
                $password_reset = DB::table('password_resets')->where('email', $user->email)->update([
                    'token' => $token,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            } else {
                $password_reset = DB::table('password_resets')->insert([
                    'email' => $user->email,
                    'token' => $token,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $email = $user->email;
            if ($password_reset) {
                $link = route('passwordForgetForm', $token);
                Mail::to($email)->send(new ForgetPasswordMailable($user->name, $link));
            }
            session()->flash('status', 'We just sent you a password reset email.');
        } else {
            session()->flash('status', 'If there is a user account that matches this information, we will send you an email with instructions shortly.');
        }

        return view('auth.passwords.email');
    }

    public function passwordForgetForm($token)
    {
        $token_exist = DB::table('password_resets')->where('token', $token)->first();
        if (isset($token_exist)) {
            $split_token = explode('@', $token);
            if (strtotime($token_exist->created_at) <= $split_token[0]) {
                return view('auth.passwords.reset', compact('token'));
            }
        }
        session()->flash('error', 'Something went wrong, please try resetting your password again.');

        return view('auth.passwords.email');
    }

    /*
 * Method to update password
 */
    public function savePasswordForget($token, Request $request)
    {
        $messages = [
            'password.regex' => 'Password must contain at least one number and both uppercase and lowercase letters.',
        ];
        $rules = [
            'password' => [
                'required',
                'string',
                'min:8',              // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'password_confirmation' => 'required|string|same:password',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($validator->fails()) {
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }
        $token_exist = DB::table('password_resets')->where('token', $token)->first();
        if (isset($token_exist)) {
            $user = User::where('email', $token_exist->email)->first();
            $user->password = bcrypt($request->password);
            $user->password_reset = 1;
            $user->save();

            Mail::to($user->email)->send(new ForgetPasswordSuccessMailable($user->name));

            DB::table('password_resets')->where('token', $token)->delete();

            session()->flash('success', true);

            return redirect('/login');
        }
        session()->flash('error', 'Something went wrong, please try again.');

        return Redirect::back();
    }
}
