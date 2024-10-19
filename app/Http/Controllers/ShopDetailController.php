<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ShopDetailController extends Controller
{
function index($slug) {
$ProductData= Products::with('category')->where('slug',$slug)->first();

    return view('frontend.shop-detail',compact('ProductData'));
}
}
