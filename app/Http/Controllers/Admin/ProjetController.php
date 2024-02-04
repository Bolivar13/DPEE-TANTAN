<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::get();
        return view('admin.projets.index', ["projets" => $projets]);
    }


    public function create()
    {
        return view('admin.projets.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required|max:255|unique:projets",
            'description' => 'required',
            'duree' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|file|max:1000000'
        ]);
        $projet = $request->all();

        if ($request->hasFile('image')) {
            $destination_path = 'public/projetsPicture';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $projet['image'] = $image_name;

            Projet::create($projet);
            return redirect('/adminprojet');
        }
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return view('admin.projets.show', [
            'projet' => $projet
        ]);
    }

    public function edit($id)
    {
        $Oldprojet = Projet::find($id);
        return view('admin.projets.edit', ['Oldprojet' => $Oldprojet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);

        $Oldprojet = Projet::find($id);
        $Newprojet = $request->all();
        // dd($Newservices);
        if ($request->hasFile('image')) {

            $destination_path = 'public/projetsPicture';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $Newprojet['image'] = $image_name;
        } else {
            $Newprojet['image'] = $Oldprojet['image'];
        }

        $Oldprojet->update($Newprojet);
        return redirect('/adminprojet');
        // dd($service);
        // dd($services);


    }



    public function destroy($id)
    {
        Projet::destroy($id);
        return redirect('/adminprojet')->with('flash_message', 'service removed');
    }
}
