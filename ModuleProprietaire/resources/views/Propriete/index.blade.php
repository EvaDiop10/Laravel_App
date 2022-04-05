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
    <h2>Liste Proprietés</h2> 
 <div class="">   
    <table class="table table table-striped">
    @foreach($propriete as $proprietes)
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Nom</th>
      <th scope="col">Superficie</th>
      <th scope="col">Nombre d'étages</th>
      <th scope="col">Montant</th>
      <th scope="col">Adresse</th>
      <th scope="col">Statut</th>
      <th scope="col">Proprietaire</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$proprietes->id}}</th>
      <td>{{$proprietes->nom_propriete}}</td>
      <td>{{$proprietes->superficie}}</td>
      <td>{{$proprietes->nombre_etage}}</td>
      <td>{{$proprietes->montant}}</td>
      <td>{{$proprietes->adresse_propriete}}</td>
      <td>{{$proprietes->statut}}</td>
      <td>{{$proprietes->telephone}}</td>
      <td>{{$proprietes->typeproprietaire_id}}</td>

    </tr>
  </tbody>
  @endforeach
</table>
</div>
</body>
</html>