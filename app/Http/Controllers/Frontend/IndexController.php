<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blogcategory;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    
    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function services(){
        return view('frontend.services');
    }

    public function portfolio(){
        return view('frontend.ourworks');
    }

    public function blogs(){
        $blogs = Blog::get();
        $recentblogs = Blog::limit(3)->get();
        return view('frontend.blogs', compact('blogs','recentblogs'));
    }

    public function blogsDetails($slug){
        $singleblogs = Blog::where('slug', $slug)->first();
        $recentblogs = Blog::limit(3)->get();
        $blogcategorys = Blogcategory::get();
        return view('frontend.blogdetails', compact('singleblogs','recentblogs','blogcategorys'));
    }
    public function userLogout(){
        Auth::logout();
        $notification = array('messege' => 'User Logout!', 'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    }
    
}
