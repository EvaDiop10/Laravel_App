<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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
    </tr>
  </thead>
  <tbody>
  @foreach($proprietes as $propriete)
    <tr>
      <th scope="row">{{$propriete->id}}</th>
      <td>{{$propriete->nom_propriete}}</td>
      <td>{{$propriete->superficie}}</td>
      <td>{{$propriete->nombre_etage}}</td>
      <td>{{$propriete->montant}}</td>
      <td>{{$propriete->adresse_propriete}}</td>
      <td>{{$propriete->statut}}</td>
      <td>{{$propriete->typeproprietes_id}}</td>
      <td>
          <a href="http://127.0.0.1:8080/proprietes/show/{{$propriete->id}}">Details</a>
      </td>
      <td> 
        <a href="http://127.0.0.1:8080/proprietes/delete/{{$propriete->id}}">
          <i class="bi bi-trash3-fill " style="color:brown"></i>
        </a>
      </td>
      <td>
        <a href="proprietes/update/{{$propriete->id}}">
          <i class="bi bi-pencil-square" style="color:green"></i>
        </a>
      <td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</body>
</html>