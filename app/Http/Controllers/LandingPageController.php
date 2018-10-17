<?php

namespace App\Http\Controllers;

use App\Product;
use App\BlogPost;
use App\PromoEvent;
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
        $posts = BlogPost::where('status', 'PUBLISHED')->where('featured', 1)->take(3)->inRandomOrder()->get();
        $long_promos = PromoEvent::where('promo_type', 'long')->where('published', true)->take(2)->get();
        $short_promos = PromoEvent::where('promo_type', 'short')->where('published', true)->take(2)->get();

        return view('landing-page')->with([
            'products' => $products,
            'posts' => $posts,
            'long_promos' => $long_promos,
            'short_promos' => $short_promos,
        ]);
    }
}
