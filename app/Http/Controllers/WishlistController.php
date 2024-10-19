<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $ipAddress = $request->ip();
        $sessionId = $request->session()->getId();

        // Fetch wishlist items for the current session or IP address
        $wishlistItems = Wishlist::with('product') // Assuming 'product' is the relationship name
            ->where(function ($query) use ($ipAddress, $sessionId) {
                $query->where('ip_address', $ipAddress)
                    ->orWhere('session_id', $sessionId);
            })->get();

        return view('frontend.wishlist', compact('wishlistItems'));
    }

    public function add(Request $request)
    {
        // Validate the incoming request to ensure the 'slug' exists in the products table
        $request->validate([
            'slug' => 'required|exists:products,slug',
        ]);

        // Get the user's IP address
        $ipAddress = $request->ip();
        $slug = $request->slug;
        // dd( $slug );
        // Fetch the product using the slug
        $product = Products::where('slug', $slug)->first();

        // Check if the product was found
        if (!$product) {
            return response()->json(['error' => 'Product not found.'], 404);
        }

        // Check if the product already exists in the wishlist for this IP address
        $exists = Wishlist::where('session_id', $request->session()->getId())
            ->where('product_id', $product->id)
            ->exists();



        // // If it exists, return an error message
        if ($exists) {
            return response()->json(['error' => 'This product is already in your wishlist.'], 400);
        } else {

            // Create a new wishlist entry
            $wishlist = new Wishlist();
            $wishlist->session_id = $request->session()->getId();
            $wishlist->ip_address = $ipAddress;
            $wishlist->product_id = $product->id;

            // Save the wishlist entry to the database
            $wishlist->save();

            // Return a success message
            return response()->json(['success' => 'Product added to wishlist successfully.']);
        }
    }



    //   // Validate the request
    // $request->validate([
    //     'product_id' => 'required|integer|exists:products,id', // Assuming you have a products table
    // ]);

    // // Create a new wishlist entry
    // $wishlist = new Wishlist();
    // $wishlist->session_id = $request->session()->getId(); // Store the session ID
    // $wishlist->ip_address = $request->ip(); // Store the user's IP address
    // $wishlist->product_id = $request->product_id; // Set the product ID
    // $wishlist->save(); // Save the wishlist entry

    // // Return a success response
    // return response()->json(['message' => 'Product added to wishlist!'], 200);



    public function remove(Request $request)
    {
        $wishlist = Wishlist::find(decrypt($request->id));

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['success' => 'Item removed from wishlist.']);
        }

        return response()->json(['error' => 'Item not found.'], 404);
    }


}
