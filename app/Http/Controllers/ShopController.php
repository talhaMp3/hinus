<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class ShopController extends Controller
{
    function index()
    {

        $ProductsData = Products::with('category')->get();

        return view('frontend.shop', compact('ProductsData'));
    }
}
