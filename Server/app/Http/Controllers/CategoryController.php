<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_category = Category::all();
        return response()->json($all_category, 200);
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
            'name' => 'required|unique:categories,name',
        ];
        $messages = [
            'name.required' => 'Required name for categories',
            'name.unique'   => 'Existing category',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $validator->errors(),
            ], 400);
        } else {
            Category::create($request->all());
            return response()->json(['message' => 'Create cate successful'], 201);
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
        $category = Category::findBySlugOrFail($slug);
        if ($category) {
            return response()->json($category, 200);
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
        $category = Category::findBySlugOrFail($slug);
        if ($category) {
            $rules = [
                'name' => 'required|unique:categories,name,' . $category->id,
            ];
            $messages = [
                'name.required' => 'Required name for categories',
                'name.unique'   => 'Existing category',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation failed',
                    'errors'  => $validator->errors(),
                ], 400);
            } else {
                $category->update($request->all());
                return response()->json(['message' => 'Update cate successful'], 200);
            }
        }
        return response()->json(['message' => 'Not Found'], 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::findBySlug($slug);
        if ($category) {
            $category->delete();
            return response()->json(['message' => 'Delete OK'], 200);
        }

        return response()->json(['message' => 'Not Found'], 404);

    }

    public function getArticles($slug)
    {
        $category = Category::findBySlugOrFail($slug);
        if ($category) {
            $articles = $category->articles;
            return response()->json($articles, 200);

        }
        return response()->json(['message' => 'Not Found'], 404);
    }
}
