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
		  	$author_response = $this->client->request('GET', 'api/authors/'.$slugAuthor);
			$author = json_decode($author_response->getBody());
			$articles_response  = $this->client->request('GET', 'api/authors/'.$slugAuthor. '/articles');
			 $articles          = json_decode($articles_response->getBody());
			 return view('frontend.pages.author',['author' => $author, 'articles' => $articles]);
		} catch (RequestException $e) {
			 abort(404);
			}
		}
}
