@extends('layouts.app')

@section('content')


    <div class="container-fluid">

        <div class="jumbotron">
            <h1>
                Latest Blog Posts
            </h1>
        </div>
        <div class="col-sm-10 col-sm-offset-1">

            @foreach ($blogs as $blog)
                <h3><a href="{{ route('blog.show', $blog->id) }}"> {{ $blog->title }}</a></h3>
                <p> {{ $blog->body }} </p>

            @endforeach
        </div>
    </div>

@endsection
