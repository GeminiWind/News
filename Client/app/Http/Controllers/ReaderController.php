<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Session;

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
		$result = json_decode($response->getBody());
		if ($result->result=='true') 
		{
			return back()->with('statusRegistation','success');
		} else {
			return back()->with('statusRegistation','error');
		}
	}

	public function login(Request $request) {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/login', [
		    'form_params' => [
		        'email' => $request->email,
		        'password' => $request->password
		    ]
		]);
		$result= json_decode($response->getBody());

		if ($result->result=='wrong email or password.')
		{
			return back()->with('statusLogin', 'error');
		} else  {
			$user= $this->getCurrentUser($result->result);
			Session::put('user_id', $user->result->id);
			Session::put('access_token', $result->result);
			return back()->with('statusLogin','success');
		}
	}

	public function getCurrentUser($access_token) {
		$client = new Client();
		$response = $client->request('POST', 'http://aiwserver.com/api/get_user_details', [
		    'form_params' => [
		      'token' => $access_token
		    ]
		]);
		$user=json_decode($response->getBody());
		return $user;
	}

	public function logout() {
		Session::forget('access_token');
		Session::forget('user_id');
		return back();
	}
		
}
