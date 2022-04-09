@extends('layouts.admin')
@section('title', 'TS IMMO| Liste des propriétés')
@section('content_wrapper')
    <h2>Liste Proprietés</h2> 
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
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@endsection