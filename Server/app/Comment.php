<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Article;
use Carbon\Carbon;

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

  public function getUserIdAttribute($value) {
    $user = User::find($value);
    return $user->name;
  }

  public function getCreatedAtAttribute($value) {
    return Carbon::parse($value)->diffForHumans();
  }

}
