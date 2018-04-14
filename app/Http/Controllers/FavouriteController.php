<?php

namespace App\Http\Controllers;

use App\{Post, User};
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function assign(Request $request, Post $post)
  {
    $request->user()->favourited_post()->syncWithoutDetaching([$post->id]);

    return back()->with('success', 'Пост добавлен в избранное');
  }
}
