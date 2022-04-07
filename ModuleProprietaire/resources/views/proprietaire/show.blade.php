<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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
        <p class="card-text">Ajouter par :{{$proprietaire->users_id}}</p>
    </div>
    </div>
</div>
</body>
</html>