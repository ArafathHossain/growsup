<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function index(){

        $Services = Service::get();
        return view('admin.services.index', compact('Services'));
    }
    public function create(){

        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_title' => 'required',
            'service_price' => 'required',
            'service_short_description' => 'required',
            'service_icon' => 'required',
        ]);

        $service = new Service();
        $service->service_title = $request->service_title;
        $service->service_slug = Str::slug($request->service_title, '-');
        $service->service_price = $request->service_price;
        $service->service_short_description = $request->service_short_description;
        $service->service_long_description = $request->service_long_description;
        $service->service_status = 1;

        if ($request->file('service_icon')) {
            $file = $request->file('service_icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/serviceIcons'), $filename);
            $service->service_icon = $filename;
        }
        $service->save();

        $notification = array('messege' => 'Service Inserted!', 'alert-type' => 'success');
        return redirect()->route('service.index')->with($notification);
    }

    public function edit($id){
        $service = Service::findorfail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request)
    {

        $service = Service::where('id', $request->id)->first();
        $service->service_title = $request->service_title;
        $service->service_slug = Str::slug($request->service_title, '-');
        $service->service_price = $request->service_price;
        $service->service_short_description = $request->service_short_description;
        $service->service_long_description = $request->service_long_description;

        if ($request->file('service_icon')) {
            $file = $request->file('service_icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/serviceIcons'), $filename);
            $service->service_icon = $filename;
        }
        $service->update();

        $notification = array('messege' => 'Service Updated!', 'alert-type' => 'success');
        return redirect()->route('service.index')->with($notification);
    }


}
