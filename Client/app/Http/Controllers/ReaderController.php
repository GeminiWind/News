<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ReaderController extends Controller
{
	public function register(Request $request) {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/register', [
		    'form_params' => [
		        'name' => $request->name,
		        'email' => $request->email,
		        'password' => $request->password
		    ]
		]);
		echo $response->getBody();
	}

	public function login(Request $request) {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/login', [
		    'form_params' => [
		        'email' => $request->email,
		        'password' => $request->password
		    ]
		]);
		echo $response->getBody();
	}

	public function getCurrentUser() {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/get_user_details', [
		    'form_params' => [
		      'token' => $request->token
		    ]
		]);
		echo $response->getBody();
	}
	/*public function test() {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/get_user_details', [
		    'form_params' => [
		        'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImlzcyI6Imh0dHA6XC9cL2Fpd3NlcnZlci5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE0ODAyNTk4OTUsImV4cCI6MTQ4MDI2MzQ5NSwibmJmIjoxNDgwMjU5ODk1LCJqdGkiOiI1OWVjYzgyMTRjMzhmNzFlZTRjZGY3ODY2MTMwYjExYiJ9.qHMf7kxLy4mFL_1sq-egG7zn7XMn_3prrGMH9jnSfac'
		    ]
		]);
		echo $response->getBody();
	}*/
		
}
