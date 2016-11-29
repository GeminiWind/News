<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ArticleController extends Controller
{
   	public function getAllArticles() {
		
		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://aiwserver.com',
		    // You can set any number of default request options.
		    'timeout'  => 10.0,
		]);
		$response = $client->request('GET', 'api/articles');
		echo $response->getBody();
   	}
   	public function getArticleDetail($slugArticle){
   		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://aiwserver.com',
		    // You can set any number of default request options.
		    'timeout'  => 10.0,
		]);
		$response = $client->request('GET', 'api/articles/'.$slugArticle);
		echo $response->getBody();
   	} 
}
