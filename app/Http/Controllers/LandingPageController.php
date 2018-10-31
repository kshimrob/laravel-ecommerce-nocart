<?php

namespace App\Http\Controllers;

use App\Product;
use App\BlogPost;
use App\PromoEvent;
use Illuminate\Http\Request;
use GeoIP as GeoIP;
use Khsing\World\Models\City;
use Khsing\World\Models\Division;
use Khsing\World\Models\Country;
use Khsing\World\World;

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

    public function current(Request $request) {
        $location = GeoIP::getLocation();
        $city = $location['city'];
        $state = $location['state'];
        $country = $location['country'];

        return response()->json([
            'state'=>$state,
            'city'=>$city,
            'country'=>$country,
            ]);
    }

    public function input(Request $request) {
        $userInput = $request->userInput;

        $city = City::getByName($userInput);
        // if ($city['division_id'] !== null) {
        //     $state = $city->division()->first();
        //     $state = $state->name;
        // } else {
        //     $state = null;
        // }

        if (is_null($city)) {
            $country = null;
            $state = null;
        } else {
            $country = $city->country()->first()->name;
            if ($city->division()->first()) {
                $state = $city->division()->first()->name;
            } else {
                $state = null;
            }
            $city = $city->name;
        }

        return response()->json([
            'city'=> $city,
            'state'=> $state,
            'country'=> $country,
        ]);
    }
}
