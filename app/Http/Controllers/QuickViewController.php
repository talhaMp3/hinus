<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class QuickViewController extends Controller
{
    public function quickView(Request $request)
    {
        $ProductData = Products::with('category')->where('slug', $request->slug)->first();
        return response()->json([
            'status' => 'success',
            'product' => [
                'title' => $ProductData->title,
                'slug' => $ProductData->slug,
                'description' => $ProductData->description,
                'category' => $ProductData->category->cat_name,
                'main_image_url' => asset(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $ProductData->main_image) ,
            ]
        ]);
    }

}
