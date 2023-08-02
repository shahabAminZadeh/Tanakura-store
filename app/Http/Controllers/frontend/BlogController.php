<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $categories=BlogCategory::all();
        $lastBlogs=Blog::latest()->limit(3)->get();
        $blogs=Blog::all();
        return view('tanakoora.blog.blogs',compact('blogs','categories','lastBlogs'));
    }
    /////////////////////
    public function blog_detail($id)
    {
        $blog=Blog::find($id);
        $category=BlogCategory::where('category_id',$id)->orderBy('id','DESC')->get();
        return view('tanakoora.blog.blog_detail',compact('blog','category'));

    }
}
