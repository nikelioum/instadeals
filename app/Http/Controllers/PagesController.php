<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Slider;
use App\Deal;

class PagesController extends Controller
{
    //Index page
    public function index(){
        
        //Categories menu
        $menuCategories = Category::where('menu', 'Yes')->orderBy('menu_sort_order', 'ASC')->get();

        //Main Slider
        $sliders = Slider::orderBy('sort', 'ASC')->get();

        //Top Deals
        $topDeals = Deal::where('popular', 'Yes')->orderBy('created_at', 'DESC')->take(4)->get();

        //Latest Deals
        $latestDeals = Deal::orderBy('created_at', 'DESC')->take(8)->get();

        return view('index', compact('menuCategories', 'sliders', 'topDeals', 'latestDeals'));
    }

    //Category page
    public function category_page($slug){

        //Categories menu
        $menuCategories = Category::where('menu', 'Yes')->orderBy('menu_sort_order', 'ASC')->get();

        //Main Slider
        $sliders = Slider::orderBy('sort', 'ASC')->get();

        //Top Deals
        $topDeals = Deal::where('popular', 'Yes')->orderBy('created_at', 'DESC')->get();

        //Open Category
        $category = Category::where('slug', $slug)->firstorFail();

        //Deals
        $deals = Deal::where('category_id', $category->name)->get();

        return view('category', compact('menuCategories', 'sliders', 'topDeals', 'category', 'deals'));
    }
}
