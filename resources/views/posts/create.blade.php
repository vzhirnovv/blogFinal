@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              @if (session()->has('success'))
                <div class="alert alert-success">
                  {{session('success')}}
                </div>
              @endif
          <div class="panel panel-default">
              <div class="panel-heading">Создать пост</div>

              <div class="panel-body">

                <form action="{{route('posts.store')}}" method="post">
                  {{ csrf_field() }}

                  <div class="form-group{{$errors->has('title') ? 'has-error' : ''}}">
                    <label for="title">Заголовок:</label>
                    <input class="form-control" type="text" name="title">
                    <span class="help-block">
                      {{$errors->first('title')}}
                    </span>
                  </div>

                  <div class="form-group{{$errors->has('body') ? 'has-error' : ''}}">
                    <label for="body">Тело:</label>
                    <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
                    <span class="help-block">
                      {{$errors->first('body')}}
                    </span>
                  </div>

                  <button type="submit" class='btn btn-primary'>Опубликовать пост</button>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
