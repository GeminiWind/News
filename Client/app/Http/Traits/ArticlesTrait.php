<?php
namespace App\Http\Traits;

use App\ConnectServer as Server;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;

trait ArticleTrait
{
    public function getArticleDetail($slugArticle)
    {
        $server = new Server();
        $client = $server->connect();
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

            return view('frontend.pages.single', ['article' => $article, 'category' => $category, 'author' => $author, 'tags' => 'tags', 'comments' => $comments]);
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}
