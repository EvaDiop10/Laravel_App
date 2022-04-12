@extends('layouts.admin')
@section('title','TS IMMO | Modidication de proriété')
@section('content_wrapper')
    <h2>Ajouter Proprietés</h2>
<div class="container">
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach        
    @endif
    <form class="row g-3" method="POST" action="{{route('proprietes.modifier')}}">
    @csrf
    <div class="col-md-6">
    <input type="hidden" name="id" class="" id="inputEmail4" value="{{$propriete->id}}">
        <label  class="form-label">Nom du proprieté</label>
        <input  name="nom_propriete" value="{{$propriete->nom_propriete}}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Superficie</label>
        <input name="superficie" value="{{$propriete->superficie}}" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre d'étages</label>
        <input name="nombre_etage" value="{{$propriete->nombre_etage}}" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Montant</label>
        <input  name="montant" value="{{$propriete->montant}}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input name="adresse_propriete" value="{{$propriete->adresse_propriete}}" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Proprietaire</label>
        <select name="proprietaire_id" id="" class="form-select">
            @foreach ($proprietaires as $proprietaire) )
                <option value="{{$proprietaire->id}}">{{$proprietaire->nom}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label  class="form-label">Statut</label>
        <select  id="inputState"  class="form-select" name="statut" >
            @if($propriete->statut)
            <option value="{{$propriete->statut}}"selected>Occupé</option>
            <option value="0">libre</option>
            @else
            <option value="{{$propriete->statut}}"selected>Libre</option>
            <option value="1">0ccupé</option>
            @endif
            
        </select>
    </div>
    <div class="col-md-6">
        <label for="type_proprietes" class="form-label">Type de propriete</label>
        <select id="inputState" class="form-select" name="type_proprietes_id">
            @foreach($typeproprietes as $typepropriete)
            <option value="{{$typepropriete->id}}" selected>{{$typepropriete->libelle}}</option>
            <option value="{{$typepropriete->id}}"></option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
    </form>
</div>
@endsection