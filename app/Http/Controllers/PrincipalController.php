<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Projet;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class PrincipalController extends Controller
{
    public function index()
    {
        $services = Service::take(4)->get();
        $projets = Projet::latest()->take(4)->get();
        return view("pages.principal.index", ["services" => $services, "projets" => $projets]);
=======
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view("pages.principal.index");
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
    }
}
