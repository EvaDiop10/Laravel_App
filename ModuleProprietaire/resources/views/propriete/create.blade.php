@extends('layouts.admin')
@section('title', 'TS IMMO| Ajouter une propriété')
@section('content_wrapper')
    <h2>Ajouter Proprietés</h2>
    <a href="{{route('proprietes.index')}}" class="btn btn-danger"><i class="bi bi-arrow-left"></i>Retour</a>
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>  
        @endforeach
    @endif
    <form class="row g-3" method="POST" action="{{route('proprietes.store')}}">
    @csrf
    <div class="col-md-6">
        <label  class="form-label">Nom du proprieté</label>
        <input  name="nom_propriete" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Superficie</label>
        <input name="superficie" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre d'étages</label>
        <input name="nombre_etage" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Montant</label>
        <input  name="montant" class="form-control" id="inputEmail4">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input name="adresse_propriete" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Proprietaire</label>
        <select name="proprietaire_id" class="form-control">
            @foreach ($proprietaires as $proprietaire)
                <option value="{{$proprietaire->id}}">{{($proprietaire->prenom)?$proprietaire->prenom.' '.$proprietaire->nom:$proprietaire->nom }}</option>
            @endforeach
        <select/>
    </div>
    <div class="col-md-6">
        <label  class="form-label">Statut</label>
        <select  id="inputState" class="form-select" name="statut">
            <option value="1"selected>Occupé</option>
            <option value="0" >Libre</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="type_proprietes" class="form-label">Type de propriete</label>
        <select id="inputState" class="form-select" name="type_proprietes_id">
            @foreach($typeproprietes as $typepropriete)
            <option value="{{$typepropriete->id}}">{{$typepropriete->libelle}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
    </form>
</div>
@endsection