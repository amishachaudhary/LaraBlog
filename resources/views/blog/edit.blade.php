@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="jumbotron">
            <h1>
                Edit Blog Post
            </h1>
        </div>

        <div class="col-md-12">
            <form action="{{ route('blog.update', $blog->id) }}" method="post">
                {{ method_field('patch') }}

                @csrf
                <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                </div>

                <div class="form-group">
                    <label for="body"> Body</label>
                    <input type="text" name="body" class="form-control" value="{{ $blog->body }}">
                    </textarea>
                </div>

                <button class="btn btn-primary" type="submit"> Update blog</button>


            </form>
        </div>
    </div>



@endsection
