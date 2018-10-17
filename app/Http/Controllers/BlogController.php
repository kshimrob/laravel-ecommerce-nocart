<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\PostCategory;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('status', 'PUBLISHED')->get();
        $categories = PostCategory::all();
        return view('/blog')->with([
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
