<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectServer as Server;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
	protected $client;
	public function __construct(Server $server)
	{
		$this->client = $server->connect();
	}
	public function show($slugCategory) {
		try {
		  	$response = $this->client->request('GET', 'api/categories/'.$slugCategory);
			$category= json_decode($response->getBody());
			//find popular, hot 
			if (View::exists('frontend.pages.categories.'.$category->slug))
			{
			    return view('frontend.pages.categories.'.$category->slug,['category'=>$category]);
			}
			return view('frontend.pages.categories.general',['category'=>$category]);
		} catch (RequestException $e) {
			echo Psr7\str($e->getRequest());
			if ($e->hasResponse()) {
			     echo Psr7\str($e->getResponse());
			}
		}
	}
}
