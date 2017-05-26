<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
  protected $fillable = ['user_id', 'tweet_id', 'text'];

  public function tweet()                       // tweetsテーブルとのアソシエーション
  {
    return $this->belongsTo(Tweet::class);
  }

  public function user()                        // usersテーブルとのアソシエーション
  {
    return $this->belongsTo(User::class);
  }
}
