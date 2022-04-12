@extends('layouts.admin')
@section('title', 'TS IMMO| Liste des propriétés')
@section('content_wrapper')
    <h2>Liste Proprietés</h2> 
    <a href="{{route('proprietes.create')}}" class="btn btn-primary">Ajouter</a>
 <div class="">   
    <table class="table table table-striped">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Nom</th>
      <th scope="col">Superficie</th>
      <th scope="col">Nombre d'étages</th>
      <th scope="col">Montant</th>
      <th scope="col">Adresse</th>
      <th scope="col">Proprietaire</th>
      <th scope="col">Type de propriété</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($proprietes as $propriete)
    <tr>
      <th>{{$propriete->id}}</th>
      <td>{{$propriete->nom_propriete}}</td>
      <td>{{$propriete->superficie}} m²</td>
      <td>{{$propriete->nombre_etage}}</td>
      <td>{{$propriete->montant}}</td>
      <td>{{$propriete->adresse_propriete}}</td>
      <td>{{($propriete->proprietaire->prenom)?$propriete->proprietaire->nom.''.$propriete->proprietaire->nom:$propriete->proprietaire->nom}}</td>
      <td>{{$propriete->type_propriete->libelle}}</td>
      <td>
            <a href="{{route('proprietes.update',[$propriete])}}" class="btn btn-success" title="Modifier"><i class="bi bi-tools"></i></a>
            <a href="{{route('proprietes.delete',[$propriete])}}" class="btn btn-danger" title="Supprimer"><i class="bi bi-x"></i></a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@endsection