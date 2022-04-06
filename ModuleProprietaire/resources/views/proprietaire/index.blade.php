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
    <h2>Liste Proprietaire</h2> 
 <div class="">   
    <table class="table table table-striped">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Sexe</th>
      <th scope="col">Civilite</th>
      <th scope="col">Date de Naissane</th>
      <th scope="col">CNI</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
  @foreach($proprietaire as $proprietaires)
  <tbody>
    <tr>
      <th scope="row">{{$proprietaires->id}}</th>
      <td>{{$proprietaires->nom}}</td>
      <td>{{$proprietaires->prenom}}</td>
      <td>{{$proprietaires->sexe}}</td>
      <td>{{$proprietaires->civilite}}</td>
      <td>{{$proprietaires->date_naissance}}</td>
      <td>{{$proprietaires->cni}}</td>
      <td>{{$proprietaires->telephone}}</td>
      <td>{{$proprietaires->code_proprietaire}}</td>
      <td><a href="http://127.0.0.1:8080/proprietaires/show/{{$proprietaires->id}}">Plus de details</a> </td>
      <td> 
        <a href="http://127.0.0.1:8080/proprietaires/delete/{{$proprietaires->id}}">
          <i class="bi bi-trash3-fill " style="color:brown"></i>
        </a>
      </td>
      <td>
        <a href="proprietaires/update/{{$proprietaires->id}}">
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