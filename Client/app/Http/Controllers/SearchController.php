<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectServer as Server;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class SearchController extends Controller
{
    protected $client;
	public function __construct(Server $server)
	{
		$this->client = $server->connect();
	}
   	public function index(){
		try {
			//find basic info of artile 
		  	$index_response = $this->client->request('GET', 'api/search/index');
			return $index_response->getBody();
		} catch (RequestException $e) {
			echo Psr7\str($e->getRequest());
			if ($e->hasResponse()) {
			     echo Psr7\str($e->getResponse());
			}
		}
   	} 
}
