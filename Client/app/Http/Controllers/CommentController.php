<?php

namespace App\Http\Controllers;

use App\ConnectServer as Server;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Session;

class CommentController extends Controller
{
    protected $client;
    public function __construct(Server $server)
    {
        $this->client = $server->connect();
    }
    public function store(Request $request, $slugArticle)
    {
        try {
            $response = $this->client->request('POST', 'api/comments', [
                'form_params' => [
                    'user_id'    => Session::get('user_id'),
                    'article_id' => $request->article_id,
                    'content'    => $request->content,
                ],
            ]);
            $result = json_decode($response->getBody());
            if ($result->message == 'Comment successful') {
                return back()->with('statusComment', 'success');
            } else {
                return back()->with('statusComment', 'error');
            }
        } catch (RequestException $e) {
            abort(400);
        }
    }
}
