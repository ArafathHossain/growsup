<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class SusbscriptionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function newsletter(){
        $emails = Newsletter::get();
        return view('admin.newsletter.index', compact('emails'));
    }
}
