<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags, 200);
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
        $rules = [
            'name' => 'required|unique:tags,name',
        ];
        $messages = [
            'name.required' => 'Required name for tag',
            'name.unique'   => 'Existing tag',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 400);
        } else {
            Tag::create($request->all());
            return response()->json(['message' => 'Create tag successful'], 201);
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
        $tag = Tag::findBySlugOrFail($slug);
        if ($tag) {
            return response()->json($tag, 200);
        }
        return response()->json(['message' => 'Not found'], 404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $tag = Tag::findBySlugOrFail($slug);
        if ($tag) {
            $rules = [
                'name' => 'required|unique:tags,name,' . $tag->id,
            ];
            $messages = [
                'name.required' => 'Required name for tag',
                'name.unique'   => 'Existing tag',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 400);
            } else {
                $tag->update($request->all());
                return response()->json(['message' => 'Update tag successful'], 200);
            }
        }
         return response()->json(['message' => 'Not found'], 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $tag = Tag::findBySlugOrFail($slug);
        if ($tag) {
            $tag->delete();
            return response()->json(['message' => 'Delete tag ok'], 200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }

    public function getArticles($slug)
    {
        $tag = Tag::findBySlugOrFail($slug);
        if ($tag) {
            $articles = $tag->articles;
            return response()->json($articles,200);
        }
        return response()->json(['message' => 'Not found'], 404);
    }
}
