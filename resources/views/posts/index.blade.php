@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Все посты</div>


                <div class="panel-body">
                  @foreach ($posts as $post)
                    <div class="card">
                      <div class="card-block">
                        <a href="/posts/{{$post->id}}">
                          <h4 class="card-title">{{$post->title}}</h4>
                        </a>
                        <a href="/profile/{{$post->user->id}}">
                          <h6 class="card-subtitle mb-2 text-muted">{{$post->user->name}} создал {{$post->created_at->format('Y-m-d')}}</h6>
                        </a>
                        <p class="card-text">{{$post->body}}</p>
                        <hr>
                      </div>
                    </div>
                  @endforeach

                  {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
