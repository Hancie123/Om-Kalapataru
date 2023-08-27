<?php

namespace App\Http\Controllers;
use App\Models\GalleryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ContactModel;

class gallerycontroller extends Controller
{
    public function admingallery(){
        $gallery = GalleryModel::orderBy('gallery_id', 'desc')->paginate(5);
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/gallery',compact('gallery','contact'));
    }

    public function gallery(){
        
        return view('gallery');
    }

   

public function insertdata(Request $request)
{
    $request->validate([
        'image_title' => 'required',
        'gallery_image' => 'required|image' // Added the 'image' validation rule
    ]);

    // Get the uploaded file and store it in the specified directory
    $path = $request->file('gallery_image')->store('img', 'public');

    // Create a new instance of the GalleryModel
    $gallery = new GalleryModel();
    $gallery->title = $request->input('image_title');
    $gallery->image_path = $path;
    $gallery->save();

    if ($gallery) {
        return back()->with('success', 'You have saved the image successfully!');
    } else {
        return back()->with('fail', 'Error Occurred!');
    }
}


public function deletestaff($id) {
    $gallery = GalleryModel::find($id);

    if (!is_null($gallery)) {
        $imagePath = $gallery->image_path; // Get the image path

        if (!is_null($imagePath) && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath); // Delete the image
        }

        $gallery->delete(); // Delete the staff record
        return back()->with('success', 'You have deleted the record successfully');
    } else {
        return back()->with('fail', 'Error Occurred!');
    }
}

}
