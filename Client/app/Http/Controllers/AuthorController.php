<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectServer as Server;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class AuthorController extends Controller
{
    protected $client;
	public function __construct(Server $server)
	{
		$this->client = $server->connect();
	}
   	public function show($slugAuthor){
		try {
		  	$response = $this->client->request('GET', 'api/authors/'.$slugAuthor);
			echo $response->getBody();
		} catch (RequestException $e) {
			echo Psr7\str($e->getRequest());
			if ($e->hasResponse()) {
			     echo Psr7\str($e->getResponse());
			}
		}
   	} 
}
