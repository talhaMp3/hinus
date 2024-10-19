<?php

namespace App\Http\Controllers\admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $HeroData =Hero::all();
        return view('admin.hero.index-hero', compact('HeroData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.add-hero');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product = new Hero();
        $product->title = $request->title;
        $product->pretitle = $request->pretitle;
        $product->link = $request->link;
        $product->offer = $request->offer;
        $product->description = $request->description;
        $product->status = $request->has('status') ? 1 : 0;
        $product->save();

        // Handle main image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_Uploaded_File = $request->file('image');

            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';

            $imageDir = public_path(config('constant.IMG_DIR.HERO_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            // Move the main image to the directory
            $image_Uploaded_File->move($imageDir, $mainImageWebpName);

            // Save the main image name in the database
            $product->image = $mainImageWebpName;
            $product->save();
        }

        // Handle other images (multiple files)
        if ($request->hasFile('mini_image')) {
            $otherImages = [];
            $imageDir = public_path(config('constant.IMG_DIR.MINI_IMAGE'));

            // Loop through each uploaded file
            foreach ($request->file('mini_image') as $uploadedFile) {
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
            $product->mini_image = json_encode($otherImages);
            $product->save();
        }

        // Redirect with a success message
        return redirect()->route('hero.create')->with('success', 'Product Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        try {
            $decryptedId = Crypt::decrypt($id);
            $hero = Hero::findOrFail($decryptedId);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->route('hero.index')->with('error', 'Invalid Hero ID.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('hero.index')->with('error', 'Hero not found.');
        }

        // Pass the category data to the view
        return view('admin.hero.edit-hero', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the existing product by ID
        $product = Hero::findOrFail(decrypt($id));

        // Update product details
        $product->title = $request->title;
        $product->pretitle = $request->pretitle;
        $product->link = $request->link;
        $product->offer = $request->offer;
        $product->description = $request->description;
        $product->status = $request->has('status') ? 1 : 0;
        $product->save();

        // Handle main image update
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
    
            $image_Uploaded_File = $request->file('image');

            // Generate new image name
            $mainImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '.webp';
            $imageDir = public_path(config('constant.IMG_DIR.HERO_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            // Delete the old image if it exists
            if ($product->image && file_exists($imageDir . '/' . $product->image)) {
                unlink($imageDir . '/' . $product->image);
            }

            // Move the new image to the directory
            $image_Uploaded_File->move($imageDir, $mainImageWebpName);

            // Save the new image name in the database
            $product->image = $mainImageWebpName;
            $product->save();
        }

        // Handle mini image (single file) update
        if ($request->hasFile('mini_image') && $request->file('mini_image')->isValid()) {
            $miniImage_Uploaded_File = $request->file('mini_image');

            // Generate new mini image name
            $miniImageWebpName = 'IMG_' . strtotime(now()) . $product->id . '_mini.webp';
            $miniImageDir = public_path(config('constant.IMG_DIR.MINI_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($miniImageDir)) {
                mkdir($miniImageDir, 0777, true);
            }

            // Delete the old mini image if it exists
            if ($product->mini_image && file_exists($miniImageDir . '/' . $product->mini_image)) {
                unlink($miniImageDir . '/' . $product->mini_image);
            }

            // Move the new mini image to the directory
            $miniImage_Uploaded_File->move($miniImageDir, $miniImageWebpName);

            // Save the new mini image name in the database
            $product->mini_image = $miniImageWebpName;
            $product->save();
        }

        // Redirect with a success message
        return redirect()->route('hero.index')->with('success', 'Slider Updated Successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        // Find the product by ID
        $product = Hero::findOrFail(decrypt($id));

        // Delete the main image if it exists
        if ($product->main_image) {
            $mainImagePath = public_path(config('constant.IMG_DIR.HERO_IMAGE') . '/' . $product->main_image);
            if (file_exists($mainImagePath)) {
                unlink($mainImagePath); // Delete the main image
            }
        }

        if ($product->mini_image) {
            $mini_imageImagePath = public_path(config('constant.IMG_DIR.MINI_IMAGE') . '/' . $product->mini_image);
            if (file_exists($mini_imageImagePath)) {
                unlink($mini_imageImagePath); // Delete the main image
            }
        }



        // Delete the product from the database
        $product->delete();

        // Redirect back with a success message
        return redirect()->route('hero.index')->with('success', 'Slider and associated images deleted successfully.');
    }
}
