<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function users(){
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }
}
