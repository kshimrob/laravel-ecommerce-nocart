<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostCategory;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->get();
        $categories = PostCategory::all();
        return view('/blog')->with([
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
