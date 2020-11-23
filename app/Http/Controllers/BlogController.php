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

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return \view('blog.edit', \compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return redirect('blog');
    }

    public function delete($id)
    {
        $blog =  Blog::findOrFail($id);
        $blog->delete();
        return redirect('blog');
    }
    public function trash()
    {
        $deletedBlogs = Blog::onlyTrashed()->get();
        return view('blog.trash', compact('deletedBlogs'));
    }
}
