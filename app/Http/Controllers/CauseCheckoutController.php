<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cause;

class CauseCheckoutController extends Controller
{
    public function index() 
    {
        $featured = Cause::where('featured', '=', 1)->get();
        $causes = Cause::where('display', '=', 1)->take(3)->inRandomOrder()->get();
        return view('causecheckout')->with([
            'causes'=> $causes,
        ]);
    }
}
