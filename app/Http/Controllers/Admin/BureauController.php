<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bureau;
use App\Models\Service;
use Illuminate\Http\Request;

class BureauController extends Controller
{
    public function index()
    {
        $bureaux = Bureau::get();
        // dd('bureaux: ', $bureaux);
        // dd($bureaux);
        return view('admin.bureaux.index', ["bureaux" => $bureaux]);
    }

    public function services()
    {
        $services = Service::get();
        // dd('services: ', $services);
        return view('admin.bureaux.create', ["services" => $services]);
    }

    public function create()
    {
        return view('admin.bureaux.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => "required|unique:bureaus",
            'description' => "required",

        ]);

        $Newbureau = $request->all();
        Bureau::create($Newbureau);
        return redirect('/adminbureau');
    }

    public function edit($id)
    {
        $services = Service::get();
        $Oldbureau = Bureau::find($id);
        return view('admin.bureaux.edit', ['Oldbureau' => $Oldbureau, "services" => $services]);
        // dd($service);
    }

    public function update(Request $request, $id)
    {
        $Oldbureau = Bureau::find($id);
        $Newbureau = $request->all();

        $Oldbureau->update($Newbureau);
        return redirect('/adminbureau');
    }

    public function show($id)
    {
        $bureau = Bureau::find($id);
        return view('admin.bureaux.show', [
            'bureau' => $bureau
        ]);
    }



    public function destroy($id)
    {
        Bureau::destroy($id);
        return redirect('/adminbureau')->with('flash_message', 'service removed');
    }
}
