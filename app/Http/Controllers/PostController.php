<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostFormRequest;
use App\Traits\PostTrait;

class PostController extends Controller
{
    use PostTrait;

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::with(['user'])->orderby('created_at', 'desc')->paginate(20);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
          'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ], [
          'title.required' => "Необходимо ввести заголовок",
            'body.required' => "Необходимо ввести тело",
        ]);

        $post = Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => auth()->id(),
      ]);

        return back()->withSuccess('Пост успешно создан!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }




}
