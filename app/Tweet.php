<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    // protected $guarded = ['id'];
    protected $fillable = ['tweet', 'text', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()                    // commentsテーブルとのアソシエーション
  {
    return $this->hasMany(Comment::class);
  }
}
