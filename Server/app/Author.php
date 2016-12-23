<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Author extends Model
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
  protected $table = 'authors';
  protected $fillable = ['name'];

  public $timestamps = true;

  public function articles() {
    return $this->hasMany('App\Article');
  }

  public function getImgUrlAttribute($value)
  {
    $path = config('path.author_image').$value;
    return $path;
  }
}
