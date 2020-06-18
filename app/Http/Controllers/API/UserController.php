<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function details(Request $request)
    {
        $user = Auth::user();

        return response()->json(['success' => $user], 200);
    }

    public function sunfire(Request $request)
    {
        $user = Auth::user();

        return response()->json(['data' => [
            'npn' => $user->npn,
            'email' => $user->email,
        ]], 200);
    }
}
