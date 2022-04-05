<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\TypeProprietaire;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietaires = Proprietaire::All();
        return view('proprietaire/index',[
            'proprietaire'=>$proprietaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeproprietaires = TypeProprietaire::All();
        return view('proprietaire.create',[
            'typeproprietaires'=>$typeproprietaires
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
        $user = auth()->user();
        Proprietaire::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "sexe"=>$request->sexe,
            "civilite"=>$request->civilite,
            "date_naissance"=>$request->date_naissance,
            "cni"=>$request->cni,
            "telephone"=>$request->telephone,
            "adresse"=>$request->adresse,
            "photo"=>$request->photo,
            "nationalite"=>$request->nationalite,
            "code_proprietaire"=>$request->code_proprietaire,
            "type_proprietaires_id"=>$request->type_proprietaires_id,
            "users_id"=>$user->id,
        ]);
        return redirect()->route('proprietaire.index');   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaires)
    {
        return view('proprietaires.show',compact('proprietaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Proprietaire $proprietaires)
    {
        $proprietaires->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "sexe"=>$request->sexe,
            "civilite"=>$request->civilite,
            "date_naissance"=>$request->date_naissance,
            "cni"=>$request->cni,
            "telephone"=>$request->telephone,
            "adresse"=>$request->adresse,
            "photo"=>$request->photo,
            "nationalite"=>$request->nationalite,
            "code_proprietaire"=>$request->code_proprietaire,
            "type_proprietaires_id	"=>$request->type_proprietaires_id,
        ]);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietaire $proprietaires)
    {
        $proprietaires->delete();
        return response()->json();
    }
    public function type ($id){
        $proprietaires = Proprietaire::where('typeproprietaire_id',$id)->get();
        return view('proprietaire.create',[
            'proprietaires'=>$proprietaires
        ]);
    }
}
