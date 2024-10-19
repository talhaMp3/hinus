<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hero;
use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
function index() {
    $CategoryData = Category::active()->select('id', 'cat_image', 'cat_name', 'slug')->get();
    $ProductsData = Products::with('category')->inRandomOrder()->take(20)->get();
    $TopProduct = Products::with('category')->where('otm',1)->get();


    $HeroData = Hero::active()->get();

    return view('frontend.index',compact('ProductsData', 'CategoryData', 'HeroData', 'TopProduct'));
}
}
