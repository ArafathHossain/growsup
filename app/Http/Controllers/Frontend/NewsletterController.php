<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
        ]);
        $Newsletters = Newsletter::where('email', $request->email)->first();
        if ($Newsletters) {
            $notification = array(
                'messege' => 'This Email already subscribed!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } else {
            $Newsletters = new Newsletter();
            $Newsletters->email = $request->email;
            $Newsletters->save();
            $notification = array(
                'messege' => 'Thanks for subscribe!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
