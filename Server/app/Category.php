<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
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
  protected $table = 'categories';
  protected $fillable = ['name'];

  public $timestamps = true;

  public function articles() {
    return $this->hasMany('App\Article');
  }
}
