<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Post};

class ProfileController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except(['show']);
    }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function favourites(User $user)
    {
      return view('profile.favourites', compact('user'));
    }
}
