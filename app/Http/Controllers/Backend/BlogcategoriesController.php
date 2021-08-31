<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogcategory;
use Illuminate\Support\Str;



class BlogcategoriesController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function index(){

        $Blogcategorys = Blogcategory::get();
        return view('admin.blogcategories.index', compact('Blogcategorys'));
    }

    public function store(Request $request)
    {
    	$validated = $request->validate([
           'category_name' => 'required|unique:blogcategories|max:100',
       ]);

    	Blogcategory::insert([
    		'category_name'=> $request->category_name,
    		'category_slug'=> Str::slug($request->category_name, '-')
    	]);

    	$notification=array('messege' => 'Category Inserted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$data=Blogcategory::findorfail($id);
    	return response()->json($data);
    }

    public function update(Request $request)
    {
       $category=Blogcategory::where('id',$request->id)->first();
       $category->update([
       		'category_name'=>$request->category_name,
       		'category_slug'=> Str::slug($request->category_name, '-')
       ]);	


    	$notification=array('messege' => 'Category Updated!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
    	$category=Blogcategory::find($id);
    	$category->delete();

    	$notification=array('messege' => 'Category Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
}
