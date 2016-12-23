<?php

namespace App\Http\Controllers;

use App\ConnectServer as Server;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $client;

    public function __construct(Server $server)
    {
        $this->client = $server->connect();
    }

    public function show($slugTag)
    {
        //get basic info of specified tag
        $tag_response = $this->client->request('GET', 'api/tags/' . $slugTag);
        $tag          = json_decode($tag_response->getBody());
        //get artcles inside specifed tag
        $articles_response = $this->client->request('GET', 'api/tags/' . $slugTag . '/articles');
        $articles           = json_decode($articles_response->getBody());

        return view('frontend.pages.tag', ['tag' => $tag, 'articles' => $articles]);
    }
}
