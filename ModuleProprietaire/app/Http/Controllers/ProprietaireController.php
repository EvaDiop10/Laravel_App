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
        $proprietaires = Proprietaire::all();
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
        $typeproprietaires = TypeProprietaire::all();
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
        

        $typeproprietaires = TypeProprietaire::find($request->type_proprietaires_id);
        if ($typeproprietaires->libelle == 'personnel') {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'type_proprietaires_id' => 'required',
                'photo' => 'required',
                'sexe' => 'required',
                'date_naissance' => 'required',
                'civilite' => 'required',
                'nationalite' => 'required'

            ]);

            $user = auth()->user();
            $filename = time().'.'.$request->photo->extension();
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
                'users_id'=>$user->id
            ]);
            return redirect()->route('proprietaires.index');
        }
        else{
            $request->validate([
                'nom' => 'required',
                'type_proprietaires_id' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'nationalite' => 'required',
                'photo' => 'required'
            ]);

            $user = auth()->user();
            $filename = time().'.'.$request->photo->extension();
            $name=$request->file('photo')->storeAs('proprietaires',$filename,'public');
            $code_proprietaire ='PROPRIO-'.$request->type_proprietaires_id.'-'.time().'-'.rand(100,500);

            Proprietaire::create([
                'nom'=>$request->nom,
                'type_proprietaires_id'=>$request->type_proprietaires_id,
                'telephone'=>$request->telephone,
                'adresse'=>$request->adresse,
                'nationalite'=>$request->nationalite,
                'photo'=>$name,
                'code_proprietaire'=>$code_proprietaire,
                'users_id'=>$user->id

            ]);
            return redirect()->route('proprietaires.index');
        }

    }
    public function delete(Proprietaire $proprietaire){
        $proprietaire->delete();
        return redirect()->route('proprietaires.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaires)
    {
        return response()->json($proprietaires);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Proprietaire $proprietaire)
    {
        $typeproprietaires = TypeProprietaire::all();
        return view('proprietaire.update',[
            'proprietaire'=>$proprietaire,
            'typeproprietaires'=>$typeproprietaires
        ]);
    }
    public function modifier(Request $request,Proprietaire $proprietaire)
    {
        
        $user = auth()->user();
        $typeproprietaires = TypeProprietaire::find($request->type_proprietaires_id);

        if ($typeproprietaires->libelle == 'personnel') {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'type_proprietaires_id' => 'required',
                'sexe' => 'required',
                'date_naissance' => 'required',
                'civilite' => 'required',
                'nationalite' => 'required',
                'cni'=>'required'

            ]);
            $proprietaire->find($request->id)->update([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'telephone'=>$request->telephone,
                'adresse'=>$request->adresse,
                'type_proprietaires_id'=>$request->type_proprietaires_id,
                'sexe'=>$request->sexe,
                'date_naissance'=>$request->date_naissance,
                'civilite'=>$request->civilite,
                'cni'=>$request->cni,
                'nationalite'=>$request->nationalite,
            ]);
            return redirect()->route('proprietaires.index');
        }
        else{
            $request->validate([
                'nom' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
                'type_proprietaires_id' => 'required',
                'nationalite' => 'required'

            ]);
            $proprietaire->find($request->id)->update([
                'nom'=>$request->nom,
                'type_proprietaires_id'=>$request->type_proprietaires_id,
                'telephone'=>$request->telephone,
                'adresse'=>$request->adresse,
                'nationalite'=>$request->nationalite,
                'users_id'=>$user->id

            ]);

            return redirect()->route('proprietaires.index');
        }
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

