@extends('layouts.admin')
@section('title', 'TS IMMO| Proprietaire {{$proprietaire->code_proprietaire}}')
@section('content_wrapper')
    <h2>Information du proprietaire</h2>
<div class="container">
    <div class="card shadow " style="width: 18rem;">
    <img src="{{Storage::url($proprietaire->photo)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$proprietaire->nom}} {{$proprietaire->prenom}}</h5>
        <p class="card-text">Sexe : {{$proprietaire->sexe}}</p>
        <p class="card-text">Civilité : {{$proprietaire->civilite}}</p>
        <p class="card-text">Date de naissance :{{$proprietaire->date_naissance}}</p>
        <p class="card-text">CNI :{{$proprietaire->cni}}</p>
        <p class="card-text">Téléphone:{{$proprietaire->telephone}}</p>
        <p class="card-text">Ajouter par :{{$proprietaire->user->name}}</p>
    </div>
    </div>
</div>
@endsection