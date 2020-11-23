@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>
                    {{ $blog->title }}
                    <a href=" {{ route('blog.edit', $blog->id) }}" style="float: right;"> Edit </a>
                </h1>

                <form action="{{ route('blog.delete', $blog->id) }}" method="POST">
                    @csrf
                    {{ method_field('delete') }}
                    <button class="btn btn-danger pull-left" class="submit"> Delete</button>
                </form>
            </div>
            <div class="col-sm-10 col-sm-offset-1">

                <p> {{ $blog->body }} </p>

            </div>
        </article>
    </div>

@endsection
