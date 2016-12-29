<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

use JWTAuth;

class APIAuthController extends Controller
{
    public function register(Request $request)

    {        

    	$input = $request->all();

    	$input['password'] = Hash::make($input['password']);

    	User::create($input);

        return response()->json(['result'=>true],201);

    }

    

    public function login(Request $request)

    {

    	$input = $request->all();

    	if (!$token = JWTAuth::attempt($input)) {

            return response()->json(['result' => 'wrong email or password.'],401);

        }

        	return response()->json(['result' => $token],200);

    }

    

    public function get_user_details(Request $request)

    {

    	$input = $request->all();

    	$user = JWTAuth::toUser($input['token']);

        return response()->json(['result' => $user],200);

    }
}
