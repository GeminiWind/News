<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_article = Article::all();

        return response()->json($all_article,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'title.required'       => 'Enter the tittle for this post',
            'titte.unique'         => 'This tittle is already existing',
            'content.required'     => 'Enter the content for this post',
            'short_intro.required' => 'Enter the short intro for this article',
            'category_id.required' => 'Enter the category for this title',
            'category_id.exists'   => 'Not existing category',
            'author_id.required'   => 'Enter the author for this article',
            'author_id.exists'     => 'Not exsiting author',
        ];
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:articles,title',
            'content'     => 'required',
            'short_intro' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id'   => 'required|exists:authors,id',
        ], $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 400);
        } else {
            $article              = new Article;
            $article->title       = $request->title;
            $article->short_intro = $request->short_intro;
            $article->content     = $request->content;
            $article->category_id = $request->category_id;
            $article->author_id   = $request->author_id;
            $article->save();
            return response()->json(['message' => 'Create article successful'], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            return response()->json($article, 200);
        }

        return response()->json(['message' => 'Not Found'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $messages = [
            'title.required'       => 'Enter the tittle for this post',
            'titte.unique'         => 'This tittle is already existing',
            'content.required'     => 'Enter the content for this post',
            'short_intro.required' => 'Enter the short intro for this article',
            'category_id.required' => 'Enter the category for this title',
            'category_id.exists'   => 'Not existing category',
            'author_id.required'   => 'Enter the author for this article',
            'author_id.exists'     => 'Not exsiting author',
        ];
        $validator = Validator::make($request->all(), [
            'title'       => 'required|unique:articles,title',
            'content'     => 'required',
            'short_intro' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id'   => 'required|exists:authors,id',
        ], $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 400);
        } else {
            $article = Article::findBySlugOrFail($slug);

            $article->title       = $request->title;
            $article->short_intro = $request->short_intro;
            $article->content     = $request->content;
            $article->category_id = $request->category_id;
            $article->author_id   = $request->author_id;

            $article->save();

            return response()->json(['message' => 'Edit article successful'], 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $article = Article::findBySlug($slug);
        if ($article) {
            $article->delete();
            return response()->json(['message' => 'Delete successful'], 200);
        }

        return response()->json(['message' => 'Not found'], 404);

    }

    public function getAuthor($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            $author = $article->author;

            return response()->json($author, 200);
        }
        return response()->json(['message' => 'Not found'], 404);

    }

    public function getTags($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            $tags = $article->tags;

            return response()->json($tags, 200);
        }
        return response()->json(['message' => 'Not found'], 404);

    }

    public function getCategory($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            $category = $article->category;

            return response()->json($category, 200);
        }

        return response()->json(['message' => 'Not found'], 404);
    }

    public function getComments($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            $comments = $article->comments;

            return response()->json($comments, 200);
        }

        return response()->json(['message' => 'Not found'], 404);
    }

    public function getRelatedArticles($slug)
    {
        $article = Article::findBySlug($slug);
        if ($article) {
            $related_articles = Article::where('id', '!=', $article->id)->where('category_id', $article->category_id)->get();
            $same_athor       = Article::where('id', '!=', $article->id)->where('author_id', $article->author_id)->get();
            $related_articles->merge($same_athor);

            return response()->json($related_articles, 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }
}
