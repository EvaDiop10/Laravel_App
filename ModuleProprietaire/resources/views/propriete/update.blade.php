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
    <h2>Ajouter Proprietés</h2>
<div class="container">
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
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input name="adresse_propriete" value="{{$propriete->adresse_propriete}}" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
    <div class="col-md-4">
        <label for="type_proprietes" class="form-label">Type de propriete</label>
        <select id="inputState" class="form-select" name="type_proprietes_id">
            @foreach($typeproprietes as $typepropriete)
            <option value="{{$typepropriete->id}}" selected>{{$typepropriete->libelle}}</option>
            <option value="{{$typepropriete->id}}"></option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
    </form>
</div>
</body>
</html>