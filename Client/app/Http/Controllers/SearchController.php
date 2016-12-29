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

   	public function showResult($type, $name)
   	{

        if ($type == "Author") {
            $author_slug = str_slug($name, $separator = "-");
            return redirect()->route("author.show", ['slugAuthor' => $author_slug]);
        } else if ($type == "Category") {
            $category_slug = str_slug($name, $separator = "-");
            return redirect()->route('category.show', ['slugCategory' => $category_slug]);
        } else if ($type == "Tag") {
            $tag_slug = str_slug($name, $separator = "-");
            return redirect()->route('tag.show', ['slugTag' => $tag_slug]);
        } else if ($type == "Article") {
            $article_slug = str_slug($name, $separator = "-");
            return redirect()->route('article.show', ['slugArticle' => $article_slug]);
        }
   	} 
}
