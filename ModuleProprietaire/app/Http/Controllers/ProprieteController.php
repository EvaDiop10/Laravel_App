<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\TypePropriete;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propriete.index',[
            'proprietes'=> Propriete::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeproprietes = TypePropriete::all();
        $proprietaires = Proprietaire::all();
        return view('propriete/create',[
            'typeproprietes'=>$typeproprietes,
            'proprietaires'=>$proprietaires
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_propriete'=>'required',
            'superficie'=>'required',
            'nombre_etage'=>'required',
            'montant'=>'required',
            'adresse_propriete'=>'required',
            'statut'=>'required',
            'proprietaire_id'=>'required',
            'type_proprietes_id'=>'required'
        ]);
        
        Propriete::create([
            "nom_propriete"=>$request->nom_propriete,
            "superficie"=>$request->superficie,
            "nombre_etage"=>$request->nombre_etage,
            "montant"=>$request->montant,
            "adresse_propriete"=>$request->adresse_propriete,
            "statut"=>$request->statut,
            "type_proprietes_id"=>$request->type_proprietes_id,
            "proprietaire_id"=>$request->proprietaire_id
        ]);
        return redirect()->route('proprietes.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        return view('propriete.show',compact('propriete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $proprietaires = Proprietaire::all();
        $typeproprietes = TypePropriete::all();
        $propriete = Propriete::find($id);
        return  view('propriete.update',[
            'propriete'=>$propriete,
            'typeproprietes'=>$typeproprietes,
            'proprietaires'=>$proprietaires
        ]);
    }
    public function modifier(Request $request,Propriete $propriete)
    {
        $request->validate([
            'nom_propriete'=>'required',
            'superficie'=>'required',
            'nombre_etage'=>'required',
            'montant'=>'required',
            'adresse_propriete'=>'required',
            'statut'=>'required',
            'proprietaire_id'=>'required',
            'type_proprietes_id'=>'required'
        ]);
        $propriete = Propriete::find($request->id);
        $propriete->update([
            "nom_propriete"=>$request->nom_propriete,
            "superficie"=>$request->superficie,
            "nombre_etage"=>$request->nombre_etage,
            "montant"=>$request->montant,
            "adresse_propriete"=>$request->adresse_propriete,
            "statut"=>$request->statut,
            "type_proprietes_id"=>$request->type_proprietes_id,
        ]);
        return redirect()->route('proprietes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        $propriete->delete();
        return redirect()->route('proprietes.index');
    }
    
}
