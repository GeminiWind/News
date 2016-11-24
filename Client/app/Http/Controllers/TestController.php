<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class TestController extends Controller
{
	public function test() {
		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://aiwserver.com',
		    // You can set any number of default request options.
		    'timeout'  => 10.0,
		]);
		$response = $client->request('GET', 'api/articles');
		dd($response);
	}



}
