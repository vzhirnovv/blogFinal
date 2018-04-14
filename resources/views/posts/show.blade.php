@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel panel-heading">

               <h1>{{$post->title}}</h1>
               <a href="/profile/{{$post->user->id}}">
                 Создано {{$post->user->name}} {{$post->created_at->format('Y-m-d')}}
               </a>

              <div class="pull-right">
                <form action="{{ route('posts.favourite', [$post]) }}" method='post' id='posts-favourite' class='hidden'>
                  {{ csrf_field() }}
                </form>

                <a href="{{ route('posts.favourite', [$post]) }}"
                  onclick="event.preventDefault();
                   document.getElementById('posts-favourite').submit();">
                    Добавить в избранное
                </a>
              </div>
            </div>

            <div class="panel panel-body">
              <p>{{$post->body}}</p>
            </div>

          </div>
      </div>
    </div>
</div>
@endsection
