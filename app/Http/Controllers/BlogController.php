<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        // to get all data use all() method
        // $blogs = Blog::all();

        // to get the latest data use latest()->get() method
        $blogs = Blog::latest()->get();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view(('blog.create'));
    }

    public function store(Request $request)
    {
        // $blog = new Blog();
        // $blog->title = $request->title;
        // $blog->body = $request->body;
        // $blog->save();
        

        $input = $request->all();
        Blog::create($input);
        return redirect('/blog');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));

    }
}
