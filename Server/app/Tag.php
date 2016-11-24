<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Tag extends Model
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
                'source' => 'name'
            ]
        ];
  }
  protected $table = 'tags';
  protected $fillable = ['name'];

  public $timestamps = true;

  public function articles() {
    return $this->belongsToMany('App\Article', 'article_tag', 'article_id', 'tag_id');
  }
}
