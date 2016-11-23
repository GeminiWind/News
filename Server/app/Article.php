<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
  protected $table = 'articles';
  protected $fillable = ['title', 'short_intro', 'content'];

  protected $guarded = ['category_id', 'author_id'];

  public $timestamps = true;

  public function author(){
    return $this->belongsTo('App\Author');
  }

  public function comments(){
    return $this->hasMany('App\Comment');
  }

  public function tags(){
    return $this->belongsToMany('App\Tag');
  }

  public function category(){
    return $this->belongsTo('App\Category');
  }
}
