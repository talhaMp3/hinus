<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProductsData = Products::all();
        return view('admin.product.index-product', compact('ProductsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $CategoryData = Category::active()->get();
            return view('admin.product.add-product',compact('CategoryData'));
    }


    public function store(Request $request)
    {

        $product = new Products();
        $product->category_id = decrypt($request->category_id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->slug = \Illuminate\Support\Str::slug($request->title, '-');
        $product->created_by = auth()->id();
        $product->status = $request->has('status') ? 1 : 0;
        $product->otm = $request->has('otm') ? 1 : 0;
        $product->save();

        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            $main_image_Uploaded_File = $request->file('main_image');

            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';

            $imageDir = public_path(config('constant.IMG_DIR.MAIN_IMAGE'));

            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            $main_image_Uploaded_File->move($imageDir, $mainImageWebpName);

            $product->main_image = $mainImageWebpName;
            $product->save();
        }
        if ($request->hasFile('hri') && $request->file('hri')->isValid()) {
            $main_image_Uploaded_File = $request->file('hri');

            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';

            $imageDir = public_path(config('constant.IMG_DIR.MAIN_IMAGE'));

            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            $main_image_Uploaded_File->move($imageDir, $mainImageWebpName);

            $product->hri = $mainImageWebpName;
            $product->save();
        }

        // Handle other images (multiple files)
        if ($request->hasFile('other_images')) {
            $otherImages = [];
            $imageDir = public_path(config('constant.IMG_DIR.OTHER_IMAGE'));

            // Loop through each uploaded file
            foreach ($request->file('other_images') as $uploadedFile) {
                if ($uploadedFile->isValid()) {
                    // Generate unique name for each image
                    $imageName = 'IMG_' . strtotime(now()) . $product->id . '_' . uniqid() . '.webp';

                    // Move the image to the directory
                    $uploadedFile->move($imageDir, $imageName);

                    // Add the image name to the array
                    $otherImages[] = $imageName;
                }
            }

            // Save the other images as JSON in the database
            $product->other_images = json_encode($otherImages);
            $product->save();
        }

        // Redirect with a success message
        return redirect()->route('product.create')->with('success', 'Product Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products, $id)
    {
        
        try {
            $decryptedId = Crypt::decrypt($id);
            $product = Products::findOrFail($decryptedId);
            $CategoryData = Category::all();
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->route('product.index')->with('error', 'Invalid Product ID.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('product.index')->with('error', 'Product not found.');
        }

        // Pass the category data to the view
        return view('admin.product.edit-product', compact('product','CategoryData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $DecryptId= decrypt($id);
        $product = Products::findOrFail($DecryptId);

        // Update the product fields
        $product->category_id = decrypt($request->category_id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->slug = \Illuminate\Support\Str::slug($request->title, '-');
        $product->status = $request->has('status') ? 1 : 0;
        $product->otm = $request->has('otm') ? 1 : 0;
        $product->updated_by = auth()->id();  // Optionally track who updated it
        $product->save();

        // Handle main image upload (optional)
        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            $main_image_Uploaded_File = $request->file('main_image');

            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';

            $imageDir = public_path(config('constant.IMG_DIR.MAIN_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            // Move the main image to the directory
            $main_image_Uploaded_File->move($imageDir, $mainImageWebpName);

            // Delete the old main image if it exists
            if ($product->main_image && file_exists($imageDir . '/' . $product->main_image)) {
                unlink($imageDir . '/' . $product->main_image);
            }

            // Update the main image name in the database
            $product->main_image = $mainImageWebpName;
            $product->save();
        }

        if ($request->hasFile('hri') && $request->file('hri')->isValid()) {
            $main_image_Uploaded_File = $request->file('hri');

            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';

            $imageDir = public_path(config('constant.IMG_DIR.MAIN_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            // Move the main image to the directory
            $main_image_Uploaded_File->move($imageDir, $mainImageWebpName);

            // Delete the old main image if it exists
            if ($product->hri && file_exists($imageDir . '/' . $product->hri)) {
                unlink($imageDir . '/' . $product->hri);
            }

            // Update the main image name in the database
            $product->hri = $mainImageWebpName;
            $product->save();
        }

        // Handle other images (optional)
        if ($request->hasFile('other_images')) {
            $otherImages = json_decode($product->other_images, true) ?? [];
            $imageDir = public_path(config('constant.IMG_DIR.OTHER_IMAGE'));

            // Loop through each uploaded file
            foreach ($request->file('other_images') as $uploadedFile) {
                if ($uploadedFile->isValid()) {
                    // Generate unique name for each image
                    $imageName = 'IMG_' . strtotime(now()) . $product->id . '_' . uniqid() . '.webp';

                    // Move the image to the directory
                    $uploadedFile->move($imageDir, $imageName);

                    // Add the image name to the array
                    $otherImages[] = $imageName;
                }
            }

            // Save the updated images as JSON in the database
            $product->other_images = json_encode($otherImages);
            $product->save();
        }

        // Redirect with a success message
        return redirect()->route('product.index')->with('success', 'Product Updated Successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        // Find the product by ID
        $product = Products::findOrFail(decrypt($id));

        // Delete the main image if it exists
        if ($product->main_image) {
            $mainImagePath = public_path(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $product->main_image);
            if (file_exists($mainImagePath)) {
                unlink($mainImagePath); // Delete the main image
            }
        }
        if ($product->hri) {
            $mainImagePath = public_path(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $product->hri);
            if (file_exists($mainImagePath)) {
                unlink($mainImagePath); // Delete the main image
            }
        }

        // Delete other images if they exist
        if ($product->other_images) {
            $otherImages = json_decode($product->other_images, true);
            $imageDir = public_path(config('constant.IMG_DIR.OTHER_IMAGE'));

            foreach ($otherImages as $image) {
                $imagePath = $imageDir . '/' . $image;
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete each other image
                }
            }
        }

        // Delete the product from the database
        $product->delete();

        // Redirect back with a success message
        return redirect()->route('product.index')->with('success', 'Product and associated images deleted successfully.');
    }

    public function deleteImage(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        // Decode the other_images field
        $otherImages = json_decode($product->other_images, true);

        // Remove the specified image
        if (($key = array_search($request->image, $otherImages)) !== false) {
            unset($otherImages[$key]);

            // Update the product with the new other_images array
            $product->other_images = json_encode(array_values($otherImages)); // Re-index the array
            $product->save();

            // Optionally delete the image file from the server
            $imagePath = public_path(config('constant.IMG_DIR.OTHER_IMAGE') . '/' . $request->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

}
