<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Projets;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view("pages.projets.index", ["projets" => $projets]);
        dd($projets);
    }


    public function show($id)
    {
        $projet = Projet::find($id);
        return view('pages.projets.show', ["projet" => $projet]);
        dd($projet);
    }
}
