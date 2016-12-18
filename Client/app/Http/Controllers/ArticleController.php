<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectServer as Server;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class ArticleController extends Controller
{
	protected $client;
	public function __construct(Server $server)
	{
		$this->client = $server->connect();
	}
   	public function show($slugArticle){
		try {
			//find basic info of artile 
		  	$get_article_response = $this->client->request('GET', 'api/articles/'.$slugArticle);
			$article=json_decode($get_article_response->getBody());
			//find author and category
			$get_author_response = $this->client->request('GET', 'api/articles/'.$article->id.'/author');
			$author= json_decode($get_author_response->getBody());
			$get_tag_response = $this->client->request('GET', 'api/articles/'.$article->id.'/tags');
			$tags= json_decode($get_tag_response->getBody());	
			return view('frontend.pages.single',['article'=>$article,'author'=>$author, 'tags'=> 'tags']);
		} catch (RequestException $e) {
			echo Psr7\str($e->getRequest());
			if ($e->hasResponse()) {
			     echo Psr7\str($e->getResponse());
			}
		}
   	} 
}
