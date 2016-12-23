<?php

namespace App\Http\Controllers;

use App\ConnectServer as Server;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    protected $client;
    public function __construct(Server $server)
    {
        $this->client = $server->connect();
    }
    public function show($slugCategory)
    {
        try {
            //get basic info of specified category
            $category_response = $this->client->request('GET', 'api/categories/' . $slugCategory);
            $category          = json_decode($category_response->getBody());
            //get articles inside specfied category
            $articles_response = $this->client->request('GET', 'api/categories/' . $slugCategory . '/articles');
            $articles          = json_decode($articles_response->getBody());
            return view('frontend.pages.categories.general', ['category' => $category, 'articles' => $articles]);
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}
