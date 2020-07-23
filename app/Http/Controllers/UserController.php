<?php

namespace App\Http\Controllers;

use App\Exports\FeedbackExport;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\UserResource;
use App\Mail\FeedbackMail;
use App\Mail\GenericEmailMarkdown;
use App\Models\Feedback;
use App\OauthClients;
use App\ThirdPartyUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
}
