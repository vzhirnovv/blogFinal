<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'title', 'body', 'user_id'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function favouriting_user()
  {
    return $this->belongsToMany(User::class, 'user_listing', 'user_id', 'post_id');
  }
}
