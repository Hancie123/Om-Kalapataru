<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\Storage;
use App\Models\ContactModel;

class blogcontroller extends Controller
{
    public function blogs(){
        $blogs=BlogModel::orderBy('blog_id','desc')->paginate(8);
        return view('blogs',compact('blogs'));
    }

    public function blogshow($slug){
        $blogs = BlogModel::where('slug', $slug)->firstOrFail();
        return view('blogshow',compact('blogs'));
    }
    public function adminblog(){
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/blogs',compact('contact'));
    }

    public function viewblog(){
        $blogs=BlogModel::orderBy('blog_id','desc')->paginate(10);
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/view_blog',compact('blogs','contact'));
    }

    public function storeblog(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_image'=>'image',
        ]);

        if ($request->hasFile('blog_image')) {
            $path = $request->file('blog_image')->store('img', 'public');
        } else {
            $path = null; 
        }

        $blog=new BlogModel();
        $blog->title=$request['blog_title'];
        $blog->category=$request['category'];
        $blog->content=$request['content'];
        $blog->blog_image=$path;
        $blog->status="Published";
        if($blog){
            $blog->save();
            return back()->with('success','You have published the blog successfully!');
        }
        else {
            return back()->with('fail','Error Occurred!');

        }


       

        
    }


    public function deleteblog($id) {
        $blog = BlogModel::find($id);
    
        if (!is_null($blog)) {
            $imagePath = $blog->blog_image; // Get the image path
    
            if (!is_null($imagePath) && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath); // Delete the image
            }
    
            $blog->delete();
            return back()->with('success', 'You have deleted the blog record successfully');
        } else {
            return back()->with('fail', 'Error Occurred!');
        }
    }
}
