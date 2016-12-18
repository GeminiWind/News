<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Author;
use App\Category;
use App\Article;
use App\Tag;
use DB;

class SearchController extends Controller
{
     public function index() {
      $authors = DB::table('authors')->select('name')->get();
      $author_list = array();
      foreach ($authors as $item) {
         array_push($author_list, $item->name);
      }

      $categories = DB::table('categories')->select('name')->get();
      $category_list = array();
      foreach ($categories as $item) {
         array_push($category_list, $item->name);
      }

      $articles = DB::table('articles')->select('title')->get();
      $article_list = array();
      foreach ($articles as $item) {
         array_push($article_list, $item->title);
      }

      $tags = DB::table('tags')->select('name')->get();
      $tag_list = array();
      foreach ($tags as $item) {
         array_push($tag_list, $item->name);
      }
      $all = array(
        "all"   => array(
            "author"   => $author_list,
            "article" => $article_list,
            "category" => $category_list,
            "tag" => $tag_list,
        )
      );
      return response()->json([
         "status" => true,
          "error"  => null,
          "data" => $all
         ]);
	}
}

