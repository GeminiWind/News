<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
  protected $table = 'comments';
  protected $fillable = ['content'];

  protected $guarded = ['article_id', 'user_id'];

  public $timestamps = true;

  public function article() {
    return $this->belongsTo('App\Article');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
