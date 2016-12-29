<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_author = Author::all();
        return response()->json($all_author, 200);
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
        $author       = new Author;
        $author->name = $request->name;
        $author->save();
        return response()->json(['message' => 'Created OK'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $author = Author::findBySlugOrFail($slug);
        if ($author) {
            return response()->json($author, 200);
        }
        return response()->json(['message' => 'Not found'], 404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

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
        $author       = Author::findBySlugOrFail($slug);
        $author->name = $request->name;
        $author->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $author = Author::findBySlugOrFail($slug);
        if ($author) {
            $author->delete();
            return response()->json(['message' => 'Delete OK'], 200);
        }
        return response()->json(['message' => 'Not found'], 404);

    }

    public function getArticles($slug)
    {
        $author = Author::findBySlugOrFail($slug);
        if ($author) {
            $articles = $author->articles;
            return response()->json($articles, 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }
}
