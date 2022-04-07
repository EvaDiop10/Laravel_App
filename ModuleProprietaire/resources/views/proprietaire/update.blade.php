@extends('layouts.admin')
@section('title','TS IMMO | Modification de Propriétaire')
@section('content_wrapper')
<h2>Modifier Proprietaire</h2>
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>  
        @endforeach
    @endif
    <form class="row g-3" action="{{route('proprietaires.modifier')}}" method="POST" >
    @csrf
    <div class="col-md-12">
        <label for="typeproprietaire" class="form-label">Type proprietaire</label>
        <select id="type_proprietire" class="form-select" name="type_proprietaires_id">
            @foreach ($typeproprietaires as $typeproprietaire) )
                <option value="{{$typeproprietaire->id}}">{{$typeproprietaire->libelle}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <input type="hidden" name="id" value="{{$proprietaire->id}}">
        <label  class="form-label">nom</label>
        <input  name="nom" value="{{$proprietaire->nom}}" class="form-control" id="nom">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prenom</label>
        <input  class="form-control" value="{{($proprietaire->prenom)?$proprietaire->prenom:''}}" id="prenom" name="prenom">
    </div>
    <div class="col-md-4">
        <label  class="form-label">Sexe</label>
        <select id="sexe" class="form-select" name="sexe">
        <option selected></option>
        <option value="H">Homme</option>
        <option value="F">Femme</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">nationalite</label>
        <select id="inputState" class="form-select" name="nationalite">
        <option value="Senegal">Sénégalais</option>
        <option value="Côte d'Ivoire">Ivoirien</option>
        <option value="Cameroun">Camerounais</option>
        </select>
    </div>
    <div class="col-md-4">
        <label  class="form-label">Civilite</label>
        <input  name="civilite" value="{{($proprietaire->civilite)?$proprietaire->civilite:''}}" class="form-control" id="civilite">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Date de naissance</label>
        <input  type="date" value="{{($proprietaire->date_naissance)?$proprietaire->date_naissance:''}}" name="date_naissance" class="form-control" id="date_naissance">
    </div>
    <div class="col-md-6">
        <label  class="form-label">CNI</label>
        <input  name="cni" value="{{($proprietaire->cni)?$proprietaire->cni:''}}" class="form-control" id="cni">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Téléphone</label>
        <input  name=" telephone" value="{{($proprietaire->telephone)?$proprietaire->telephone:''}}" class="form-control" id="telephone">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Address</label>
        <input type="text" value="{{($proprietaire->adresse)?$proprietaire->adresse:''}}" name="adresse" class="form-control" id="adresse" placeholder="Apartment, studio, or floor">
    </div>

    <div class="col-5 my-2">
        <button type="submit" class="btn btn-primary col-6 ">Modifier</button>
    </div>
    </form>
</div>
@endsection()