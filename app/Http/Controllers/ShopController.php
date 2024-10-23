<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\products;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Check if the 'category' parameter exists in the URL
        $categorySlug = $request->query('category');

        if ($categorySlug) {
            // Fetch the category by the slug
            $category = Category::where('slug', $categorySlug)->first();

            // If the category exists, get products related to that category
            if ($category) {
                $ProductsData = Products::where('category_id', $category->id)
                ->with('category')
                ->get();
            } else {
                // If category not found, you might want to show no products or handle it differently
                $ProductsData = collect(); // Empty collection
            }
        } else {
            // If no category slug, fetch all products
            $ProductsData = Products::with('category')->get();
        }

        return view('frontend.shop', compact('ProductsData'));
    }
}