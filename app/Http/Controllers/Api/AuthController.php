<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function getAccessToken(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return new UserResource(Auth::user());
        }

        return response()->json([
            'error' => true,
            'message' => 'Wrong credentials!',
        ])->setStatusCode(401);
    }

 
}
