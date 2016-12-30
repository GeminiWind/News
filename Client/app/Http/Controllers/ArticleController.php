<?php

namespace App\Http\Controllers;

use App\ConnectServer as Server;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $client;
    public function __construct(Server $server)
    {
        $this->client = $server->connect();
    }
    public function show($slugArticle)
    {
        try {
            //get basic info of artile
            $article_response = $this->client->request('GET', 'api/articles/' . $slugArticle);
            $article          = json_decode($article_response->getBody());
            //get category
            $category_response = $this->client->request('GET', 'api/articles/' . $slugArticle . '/category');
            $category          = json_decode($category_response->getBody());
            //get author
            $author_response = $this->client->request('GET', 'api/articles/' . $slugArticle . '/author');
            $author          = json_decode($author_response->getBody());
            //get tags
            $tags_response = $this->client->request('GET', 'api/articles/' . $slugArticle . '/tags');
            $tags          = json_decode($tags_response->getBody());
            //get comments
            $comments_response = $this->client->request('GET', 'api/articles/' . $slugArticle . '/comments');
            $comments          = json_decode($comments_response->getBody());
            //get related articles
            $related_article_response = $this->client->request('GET', 'api/articles/' . $slugArticle . '/realted-articles');
            $related_articles          = json_decode($related_article_response->getBody());


            return view('frontend.pages.single', [
                'article' => $article,
                'category' => $category,
                'author' => $author,
                'tags' => $tags, 
                'comments' => $comments, 
                'related_articles' => $related_articles
                ]);
        } catch (RequestException $e) {
            abort(404);
        }
    }
}
