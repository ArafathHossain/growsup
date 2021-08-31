<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blogcategory;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function index(){

        $Blogs = Blog::get();
        return view('admin.blog.index', compact('Blogs'));
    }
    public function create(){

        $blogcategorys = Blogcategory::get();
        return view('admin.blog.create', compact('blogcategorys'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $Blogs = new Blog();
        $Blogs->title = $request->title;
        $Blogs->slug = Str::slug($request->title, '-');
        $Blogs->category_id = $request->category_id;
        $Blogs->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $filename);
            $Blogs->image = $filename;
        }
        $Blogs->save();

        $notification = array('messege' => 'Blog Inserted!', 'alert-type' => 'success');
        return redirect()->route('blog.index')->with($notification);
    }

    public function edit($id){

        $blogcategorys = Blogcategory::get();
        $blog = Blog::findorfail($id);
        return view('admin.blog.edit', compact('blogcategorys','blog'));
    }

    public function update(Request $request)
    {
        
        $Blogs = Blog::where('id', $request->id)->first();
        $Blogs->title = $request->title;
        $Blogs->slug = Str::slug($request->title, '-');
        $Blogs->category_id = $request->category_id;
        $Blogs->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $filename);
            $Blogs->image = $filename;
        }
        $Blogs->update();

        $notification = array('messege' => 'Blog Updated!', 'alert-type' => 'success');
        return redirect()->route('blog.index')->with($notification);
    }

    public function destroy($id)
    {
    	$blog=Blog::find($id);
    	$blog->delete();

    	$notification=array('messege' => 'Blog Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
}
