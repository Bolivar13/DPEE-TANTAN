<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Bureau;
use App\Models\Service;
=======
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
use Illuminate\Http\Request;

class ServicesController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $services = Service::all();
        return view("pages.services.index", ["services" => $services]);
    }
    public function show($id)
    {
        $service = Service::find($id);
        $bureaux = Bureau::where('service_id', '=', $id)->get();
        // dd($bureaux, $service);
        return view("pages.services.show", ["service" => $service, "bureaux" => $bureaux]);
=======
    public function index(){
        return view("pages.services.index");
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
    }
}
