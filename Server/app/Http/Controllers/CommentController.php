<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments, 200);
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
            'content.required'    => 'Enter the tittle for this post',
            'article_id.required' => 'Enter the category for this title',
            'article_id.exists'   => 'Not existing category',
            'user_id.required'    => 'Enter the author for this article',
            'user_id.exists'      => 'Not exsiting user',
        ];
        $validator = Validator::make($request->all(), [
            'content'    => 'required',
            'article_id' => 'required|exists:articles,id',
            'user_id'    => 'required|exists:users,id',
        ], $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 400);
        } else {
            $comment             = new Comment;
            $comment->content    = $request->content;
            $comment->article_id = $request->article_id;
            $comment->user_id    = $request->user_id;
            $comment->save();
            return response()->json(['message' => 'Comment successful'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment) {
            return response()->json($comment, 200);
        }
        return response()->json(['message' => 'Not Found'], 404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment          = Comment::findOrFail($id);
        $comment->content = $request->content;
        $comment->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment) {
            $comment->delete();
            return response()->json(['message' => 'Delete OK'], 200);
        }
        return response()->json(['message' => 'Not Found'], 404);
    }
}
