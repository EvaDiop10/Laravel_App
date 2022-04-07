
@extends('layouts.admin')
@section('title','TS IMMO | Propriétaires')
@section('content_wrapper')
 <div class="rounded  m-5">  
<h1>Propriétaires</h1> 
<center><h2>Liste Proprietaire personnels </h2></center>
 <a href="{{route('proprietaires.create')}}" class="btn btn-primary">Ajouter</a>
    <table class="table table table-striped">
    <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Sexe</th>
      <th scope="col">Civilite</th>
      <th scope="col">CNI</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
    @foreach($proprietaire as $proprietaires)
      @if ($proprietaires->type_prorpietaire->libelle=='personnel')
      <tbody>
        <tr>
          <th scope="row">{{$proprietaires->code_proprietaire}}</th>
          <td><img src="{{Storage::url($proprietaires->photo)}}" alt="" width="50" height="50" class="rounded-circle"></td>
          <td>{{$proprietaires->nom}}</td>
          <td>{{$proprietaires->prenom}}</td>
          <td>{{$proprietaires->sexe}}</td>
          <td>{{$proprietaires->civilite}}</td>
          <td>{{$proprietaires->cni}}</td>
          <td>{{$proprietaires->telephone}}</td>
          <td>
            <a href="{{route('proprietaires.update',[$proprietaires])}}" class="btn btn-success" title="Modifier"><i class="bi bi-tools"></i></a>
            <a href="{{route('proprietaires.delete',[$proprietaires])}}" class="btn btn-danger" title="Supprimer"><i class="bi bi-x"></i></a>
          </td>
        </tr>
       </tbody>
      @endif
  @endforeach
</table>
<center><h2>Liste Proprietaire professionnel </h2></center> 
 <div class="">   
    <table class="table table table-striped">
    <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Siege sociale</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
    @foreach($proprietaire as $proprietaires)
      @if ($proprietaires->type_prorpietaire->libelle=='professionnel')
      <tbody>
        <tr>
          <th scope="row">{{$proprietaires->code_proprietaire}}</th>
          <td><img src="{{Storage::url($proprietaires->photo)}}" alt="" width="50" height="50" class="rounded-circle"></td>
          <td>{{$proprietaires->nom}}</td>
          <td>{{$proprietaires->adresse}}</td>
          <td>{{$proprietaires->telephone}}</td>
          <td>
            <a href="{{route('proprietaires.update',[$proprietaires])}}" class="btn btn-success" title="Modifier"><i class="bi bi-tools"></i></a>
            <a href="{{route('proprietaires.delete',[$proprietaires])}}" class="btn btn-danger" title="Supprimer"><i class="bi bi-x"></i></a>
        
          </td>
        </tr>
       </tbody>
      @endif
  @endforeach
</table>
@endsection()