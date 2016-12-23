<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
  use Sluggable;
  use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
  public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
  }

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

  public function getUrlImageAttribute($value)
  {
    $path = config('path.cover_image').$value;
    return $path;
  }
}
