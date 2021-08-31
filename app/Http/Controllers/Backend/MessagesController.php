<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function message(){
        $Contacts = Contact::get();
        return view('admin.messages.index', compact('Contacts'));
    }
}
