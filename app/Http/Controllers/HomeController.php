<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.admin.home');
    }

    public function feedback()
    {
        return view('pages.admin.feedback');
    }

    public function messages()
    {
        return view('pages.admin.messages');
    }

    public function redirect(Request $request)
    {
        $query = http_build_query([
            'client_id' => $request->client_id,
            'redirect_uri' => $request->redirect_uri,
            'response_type' => $request->response_type,
            'scope' => $request->scope,
        ]);

        return redirect(URL::to('/oauth/authorize').'?'.$query);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
