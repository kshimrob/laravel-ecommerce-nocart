<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;
use App\Post;

class PostCategoryController extends Controller
{
    public function show($slug) {
        // match slug to category and get all the posts
        $category = PostCategory::where('slug', '=', $slug)->firstOrFail();
        $categories = PostCategory::all();
        $posts = $category->posts;

        // return the posts
        return view('postcategory')->with([
            'posts' => $posts,
            'category' => $category,
            'categories' => $categories,
        ]);
        
    }
}
