<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\TypeProprietaire;
use Illuminate\Support\Facades\Storage;

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
        $typeproprietaires = TypeProprietaire::find($request->type_proprietaires_id);
        $filename = time().'.'.$request->photo-> extension();
        $name=$request->file('photo')->storeAs('proprietaires',$filename,'public');
        $code_proprietaire ='PROPRIO-'.$request->type_proprietaires_id.'-'.time().'-'.rand(100,500);
        Proprietaire::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'type_proprietaires_id'=>$request->type_proprietaires_id,
            'telephone'=>$request->telephone,
            'cni'=>$request->cni,
            'adresse'=>$request->adresse,
            'nationalite'=>$request->nationalite,
            'sexe'=>$request->sexe,
            'civilite'=>$request->civilite,
            'date_naissance'=>$request->date_naissance,
            'photo'=>$name,
            'code_proprietaire'=>$code_proprietaire,
            'users_id'=>$user->id,
      
    ]);
        if ($typeproprietaires->libelle == 'personnel') {
            
            Proprietaire::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'type_proprietaires_id'=>$request->type_proprietaires_id,
                'telephone'=>$request->telephone,
                'cni'=>$request->cni,
                'adresse'=>$request->adresse,
                'nationalite'=>$request->nationalite,
                'sexe'=>$request->sexe,
                'civilite'=>$request->civilite,
                'date_naissance'=>$request->date_naissance,
                'photo'=>$name,
                'code_proprietaire'=>$code_proprietaire,
                'users_id'=>$user->id,
            ]);
        return redirect()->route('proprietaire.index');   
     }
     else{ 
        $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'type_proprietaires_id' => 'required',
            'photo' => 'required',
            'nationalite' => 'required',

        ]);
        Proprietaire::create([
            'nom'=>$request->nom,
            'type_proprietaires_id'=>$request->type_proprietaires_id,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'nationalite'=>$request->nationalite,
            'photo'=>$name,
            'code_proprietaire'=>$code_proprietaire,
            'users_id'=>$user->id,

        ]);
        return redirect()->route('proprietaires.index');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {

        return view('proprietaire.show',compact('proprietaire'));
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
    public function update($id)
    {
        $typeproprietaires = TypeProprietaire::all();
        $proprietaire = Proprietaire::find($id);
        return  view('proprietaire.update',['proprietaire'=>$proprietaire,'typeproprietaires'=>$typeproprietaires]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietaire $proprietaire)
    {
        Storage::delete($proprietaire->photo);
        
        $proprietaire->delete();
        return redirect()->route('proprietaires.index');
    }
    
    public function type ($id){
        $proprietaires = Proprietaire::where('typeproprietaire_id',$id)->get();
        return view('proprietaire.create',[
            'proprietaires'=>$proprietaires
        ]);
    }
    public function modifier(Request $request)
    {
        $user = auth()->user();
        $typeproprietaires = TypeProprietaire::find($request->type_proprietaires_id);
        $filename = time().'.'.$request->photo-> extension();
        $name=$request->file('photo')->storeAs('proprietaires',$filename,'public');
        $code_proprietaire ='PROPRIO-'.$request->type_proprietaires_id.'-'.time().'-'.rand(100,500);
        $proprietaire = Proprietaire::find($request->id);
        $proprietaire->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'type_proprietaires_id'=>$request->type_proprietaires_id,
            'telephone'=>$request->telephone,
            'cni'=>$request->cni,
            'adresse'=>$request->adresse,
            'nationalite'=>$request->nationalite,
            'sexe'=>$request->sexe,
            'civilite'=>$request->civilite,
            'date_naissance'=>$request->date_naissance,
            'photo'=>$name,
            'code_proprietaire'=>$code_proprietaire,
            'users_id'=>$user->id,
        ]);
        return redirect()->route('proprietaires.index');
    }
}
