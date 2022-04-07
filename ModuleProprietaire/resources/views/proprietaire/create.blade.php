@extends('layouts.admin')
@section('title','TS IMMO | Ajout de Propriétaire')
@section('content_wrapper')
<h2>Ajouter Proprietaire</h2>
<a href="{{route('proprietaires.index')}}" class="btn btn-danger"><i class="bi bi-arrow-left"></i>Retour</a>
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>  
        @endforeach
    @endif
    <form class="row g-3" action="store" method="POST" enctype= "multipart/form-data">
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
        <label  class="form-label">nom</label>
        <input  name="nom" class="form-control" id="nom">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prenom</label>
        <input  class="form-control" id="prenom" name="prenom">
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
        <option selected>Choose...</option>
        <option value="Senegal">Sénégalais</option>
        <option value="Côte d'Ivoire">Ivoirien</option>
        <option value="Cameroun">Camerounais</option>
        </select>
    </div>
    <div class="col-md-4">
        <label  class="form-label">Civilite</label>
        <input  name="civilite" class="form-control" id="civilite">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Date de naissance</label>
        <input  type="date" name="date_naissance" class="form-control" id="date_naissance">
    </div>
    <div class="col-md-6">
        <label  class="form-label">CNI</label>
        <input  name="cni" class="form-control" id="cni">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Téléphone</label>
        <input  name=" telephone" class="form-control" id="telephone">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Address</label>
        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12 ">
        <label for="inputAddress2" class="form-label">Photo</label>
        <input type="file" class="form-control" id="photo" aria-describedby="inputGroupFileAddon04"  name="photo" aria-label="Upload">
    </div>


    <div class="col-5 my-2">
        <button type="submit" class="btn btn-primary col-6 ">Ajouter</button>
    </div>
    </form>
</div>
@endsection()
