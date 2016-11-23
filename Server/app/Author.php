<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
  protected $table = 'authors';
  protected $fillable = ['name'];

  public $timestamps = true;

  public function articles() {
    return $this->hasMany('App\Article');
  }
}
