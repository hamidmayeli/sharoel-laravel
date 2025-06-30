<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::with('mainImage')->orderBy('order_num')->get();
        $plans = Plan::all();
        $sliderImages = Image::latest()->limit(12)->get();

        return view('app.home.index', compact('categories', 'plans', 'sliderImages'));
    }
}
