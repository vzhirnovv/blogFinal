@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-group">
              <div class="panel panel-heading">
                <h2>Избранное</h2>
              </div>

              <div class="panel panel-body">
                @foreach ($user->favourited_post as $post)
                  <a href="/posts/{{$post->id}}">
                    <h4>{{$post->title}}</h4>
                  </a>
                @endforeach
              </div>
          </div>
    </div>
</div>
@endsection
