<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProprietaire;

class TypeProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère tous les Types
        $typeproprietaires = Typeproprietaire::all();
        // On retourne les informations des types en JSON
        return view('typeproprietaire/index',[
            'typeproprietaires'=>$typeproprietaires
        ]);
        //return response()->json($typeproprietaires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeproprietaire/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TypeProprietaire::create($request->All([
        'libelle'=>$request->libelle
        ]));
        return redirect()->route('typeproprietaire.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProprietaire $typeproprietaires)
    {
        return response()->json($typeproprietaires);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,TypeProprietaire $typeproprietaires)
    {
        $typeproprietaires->update([
            "libelle" =>$request->libelle
        ]);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProprietaire $typeproprietaires)
    {
        $typeproprietaires->delete();
        return response()->json();
    }
}
