@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-group">

              <div class="panel panel-heading">
                <h2>{{$user->name}}</h2>
              </div>
              <div class="panel panel-body">
                <h4>{{$user->first}} {{$user->last}}</h4>
                <h4>{{$user->age}} years old</h4>
                <h4>Живет в {{$user->pob}}</h4>
                <h4>Профиль создан {{$user->created_at}}</h4>
              </div>

            </div>

            <div class="panel panel-group">

              <div class="panel panel-heading">
                <h3>Посты {{$user->name}}</h2>
              </div>
              <div class="panel panel-body">
                  @foreach ($user->posts as $post)
                    <a href="/posts/{{$post->id}}">
                      <h4>{{$post->title}}</h4>
                    </a>
                  @endforeach
              </div>

            </div>

            <div class="panel panel-group">

              <div class="panel panel-heading">
                <h3>Избранное {{$user->name}}</h2>
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
</div>
@endsection
