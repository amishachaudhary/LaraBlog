@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="jumbotron">
            <h1>
                create a Blog Post
            </h1>
        </div>

        <div class="col-md-12">
            <form action="{{ route('blog.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="body"> Body</label>
                    <textarea type="text" name="body" class="form-control">
                                                        </textarea>
                </div>

                <button class="btn btn-primary" type="submit"> create a new blog</button>
            </form>
        </div>
    </div>



@endsection
