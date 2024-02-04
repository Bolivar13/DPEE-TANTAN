<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bureau;
use App\Models\Service;
use Illuminate\Auth\Events\Validated;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\ValidatedInput;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('admin.serviices.index', ["services" => $services]);
    }






    public function create()
    {
        return view('admin.serviices.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required|max:255|unique:services",
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|file|max:1000000'
        ]);

        $services = $request->all();
        if ($request->hasFile('image')) {
            $destination_path = 'public/images';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $services['image'] = $image_name;

            Service::create($services);
            return redirect('/adminservice');
        } else {
            return redirect('/admin');
        }
    }
    public function show($id)
    {
        $services = Service::find($id);
        $BureauxOfservice = Bureau::where('service_id', '=', $id)->get();
        return view('admin.serviices.show', [
            'services' => $services,
            "BureauxOfservice" => $BureauxOfservice
        ]);
    }

    public function edit($id)
    {
        $Oldservice = Service::find($id);
        return view('admin.serviices.edit', ['Oldservice' => $Oldservice]);
        // dd($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);

        $Oldservice = Service::find($id);
        $Newservices = $request->all();
        // dd($Newservices);
        if ($request->hasFile('image')) {

            $destination_path = 'public/images';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $Newservices['image'] = $image_name;
        } else {
            $Newservices['image'] = $Oldservice['image'];
        }

        $Oldservice->update($Newservices);
        return redirect('/adminservice');
        // dd($service);
        // dd($services);


    }



    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/adminservice')->with('flash_message', 'service removed');
    }
}
