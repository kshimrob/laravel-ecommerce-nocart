<?php

namespace App\Http\Controllers;

use App\Product;
use App\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $posts = Post::where('status', 'PUBLISHED')->take(3)->inRandomOrder()->get();
        return view('landing-page')->with([
            'products' => $products,
            'posts' => $posts,
        ]);
    }
}
