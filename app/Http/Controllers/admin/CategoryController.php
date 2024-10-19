<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Drivers\Imagick\Driver;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CategoryData = Category::all();
        return view('admin.category.index-category',compact('CategoryData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.category.add-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate(
            [
                'cat_name' => 'required|min:2|max:100|unique:categories,cat_name',
                'cat_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:8048',
            ],
            [
                'cat_name.required' => 'Category Name is required',
                'cat_name.max' => 'Category name must not be greater than :max characters',
                'cat_name.min' => 'Category name must be at least :min characters',
                'cat_image.required' => 'Category Image is required',
                'cat_image.image' => 'File must be an image',
                'cat_image.mimes' => 'Category Image must be one of png, jpg, jpeg, or webp',
                'cat_image.max' => 'Category Image should not be greater than 8 MB',
            ]
        );

        // Check if category with the same name already exists
        if (Category::where('cat_name', $request->cat_name)->exists()) {
            return back()->with('error', 'Category name already exists.');
        }

        // Create a new category
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_description = $request->cat_description;
        $category->slug = \Illuminate\Support\Str::slug($request->cat_name, '-');
        $category->created_by = auth()->id();
        $category->status = $request->has('status') ? 1 : 0;
        $category->save();

        // // Handle image upload if file is present // //
        if ($request->hasFile('cat_image') && $request->file('cat_image')->isValid()) {
            $cat_image_Uploaded_File = $request->file('cat_image');

           // // Define the new image name (webp extension) // //
            $logoWebpImageName = 'IMG_' . strtotime(now()) . $category->id . '.webp';

            // Define the directory for image storage
            $imageDir = public_path(config('constant.IMG_DIR.CATEGORY_IMAGE'));

            // Create the directory if it doesn't exist
            if (!is_dir($imageDir)) {
                mkdir($imageDir, 0777, true);
            }

            // Move the image to the specified directory with a new name
            $cat_image_Uploaded_File->move($imageDir, $logoWebpImageName);

            // Save the image name in the category record
            $category->cat_image = $logoWebpImageName;
            $category->save();
        }

        // Redirect with a success message
        return redirect()->route('category.create')->with('success', 'Category Added Successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // Decrypt the ID and find the category
        try {
            $decryptedId = Crypt::decrypt($id);
            $category = Category::findOrFail($decryptedId);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            // Handle the case where decryption fails
            return redirect()->route('category.index')->with('error', 'Invalid category ID.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the category is not found
            return redirect()->route('category.index')->with('error', 'Category not found.');
        }

      // Pass the category data to the view
        return view('admin.category.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $request->validate(
            [
                'cat_name' => 'required|min:2|max:30|unique:categories,cat_name,' . decrypt($id) . ',id',
                'cat_image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:8048',
            ],
            [
                'cat_name.required' => 'Category Name Required',
                'cat_name.max' => 'Category name field must not be greater than 25 characters',
                'cat_name.min' => 'Category name field must be at least 2 characters',
                'cat_image.required' => 'Category Image Required',
                'cat_image.image' => 'This must be an Image',
                'cat_image.mimes' => 'Category Image must be png,jpg,jpeg,webp',
                'cat_image.max' => 'Category Image should not be greater than 2 MB',
            ]
        );
        DB::beginTransaction();
        try {
            $categoryUpdate = Category::WHERE('id', decrypt($id))->first();
            $category_id = $categoryUpdate->id;
            if (!empty($categoryUpdate)) {
                // Handle image upload
                if ($request->hasFile('cat_image')) {
                    // Path to the existing image
                    $imagePath = public_path(config('constant.IMG_DIR.CATEGORY_IMAGE') . '/' . $categoryUpdate->cat_image);

                    // Delete the old image if it exists
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }

                    // Get the uploaded file
                    $cat_image_Uploaded_File = $request->file('cat_image');

                    // Generate a new image name with the original extension
                    $logoImageName = 'IMG_' . strtotime(now()) . $category_id . '.' . $cat_image_Uploaded_File->getClientOriginalExtension();

                    // Make sure the directory exists, if not, create it
                    $imageDirectory = public_path(config('constant.IMG_DIR.CATEGORY_IMAGE'));
                    if (!is_dir($imageDirectory)) {
                        mkdir($imageDirectory, 0777, true);
                    }

                    // Move the uploaded image to the directory
                    $cat_image_Uploaded_File->move($imageDirectory, $logoImageName);

                    // Update the category image in the database
                    $categoryUpdate->cat_image = $logoImageName;
                }
                $categoryUpdate->cat_name = $request->cat_name;        //name
                $categoryUpdate->cat_description = $request->cat_description;   
                $categoryUpdate->slug = \Illuminate\Support\Str::slug(strtolower($request->cat_name), '-');
                $categoryUpdate->status = $request->has('status') ? 1 : 0;
                $categoryUpdate->updated_by = auth()->id();
                $categoryUpdate->update();
                DB::commit();
                session()->flash('success', 'Category Updated Successfully.');
            } else {
                session()->flash('error', 'Something Went Wrong.001');
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File: " . $e->getFile() . " LN No:" . $e->getLine() . " Msg : " . $e->getMessage());
            session()->flash('error', 'Something Went Wrong. 002');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
   
     
        $categoryDelete = Category::WHERE('id', decrypt($id))->first();
  
        DB::beginTransaction();
        try {
            if ($categoryDelete) {
                $filePath = public_path(config('constant.IMG_DIR.CATEGORY_IMAGE')) . '/' . $categoryDelete->cat_image;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $categoryDelete->delete();
                DB::commit();
                session()->flash('success', 'Category Deleted successfully.');
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File: " . $e->getFile() . " LN No:" . $e->getLine() . " Msg : " . $e->getMessage());
            session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('category.index');
    }
}
