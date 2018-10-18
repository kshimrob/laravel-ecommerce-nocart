<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $posts = BlogPost::where('status', 'PUBLISHED')->where('about', 1)->take(3)->inRandomOrder()->get();

        return view('about')->with([
            'posts' => $posts,
        ]);
    }
}
