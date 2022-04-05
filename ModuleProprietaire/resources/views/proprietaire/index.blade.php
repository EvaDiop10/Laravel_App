<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <center><h2>Liste Proprietaire personnels </h2></center> 
 <div class="container">   
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
          <td><img src="{{Storage::url($proprietaires->photo)}}" alt="" width="50" height="50"></td>
          <td>{{$proprietaires->nom}}</td>
          <td>{{$proprietaires->prenom}}</td>
          <td>{{$proprietaires->sexe}}</td>
          <td>{{$proprietaires->civilite}}</td>
          <td>{{$proprietaires->cni}}</td>
          <td>{{$proprietaires->telephone}}</td>
          <td>
            <a href="" class="btn btn-success" title="Modifier">Modifier</a>
            <a href=""class="btn btn-danger" title="Supprimer">Supprimer</a>
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
          <td><img src="{{Storage::url($proprietaires->photo)}}" alt="" width="50" height="50"></td>
          <td>{{$proprietaires->nom}}</td>
          <td>{{$proprietaires->adresse}}</td>
          <td>{{$proprietaires->telephone}}</td>
          <td>
            <a href="" class="btn btn-success" title="Modifier">Modifier</a>
            <a href=""class="btn btn-danger" title="Supprimer">Supprimer</a>
          </td>
        </tr>
       </tbody>
      @endif
  @endforeach
</table>
</div>
</body>
</html>
