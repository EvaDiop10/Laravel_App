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
    <h2>Ajouter Proprietaire</h2>
<div class="container">
    <form class="row g-3" method="POST" action="{{route('proprietaires.modifier')}}" enctype='multipart/form-data' >
    @csrf
    <div class="col-md-6">
    <input type="hidden" name="id" class="" id="inputEmail4" value="{{$proprietaire->id}}">
        <label  class="form-label">Nom</label>
        <input  name="nom" class="form-control" id="inputEmail4" value="{{$proprietaire->nom}}">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prénom</label>
        <input name="prenom"  class="form-control" id="inputPassword4" value="{{$proprietaire->prenom}}">
    </div>
    <div class="col-md-6">
        <label  class="form-label"></label>
        <select id="inputState" class="form-select" name="sexe">
        <option selected >{{$proprietaire->sexe}}</option>
        <option></option>
        <option value="">Femme</option>
        </select>
    </div>
    <div class="col-md-6">
        <label  class="form-label">Civilité</label>
        <input value="{{$proprietaire->civilite}}" name="civilite" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label"></label>
        <input  type="date" name="date_naissance" value="{{$proprietaire->date_naissance}}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label"></label>
        <input  name="cni" value="{{$proprietaire->cni}}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label"></label>
        <input value="{{$proprietaire->telephone}}" name="telephone" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label"></label>
        <input  name="code_proprietaire" value="{{$proprietaire->code_proprietaire}}" class="form-control" id="inputEmail4"  placeholder="Prop-CNI">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label"></label>
        <input name="adresse" type="text" class="form-control" value="{{$proprietaire->adresse}}" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12 ">
        <label for="inputAddress2" class="form-label"></label>
        <input name="photo" type="file" value="{{$proprietaire->photo}}" class="form-control"  id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label"></label>
        <select id="inputState" class="form-select" name="nationalite">
        <option selected>{{$proprietaire->nationalite}}</option>
        <option></option>
        <option>Camerounais</option>
        <option>Algerien</option>

        </select>
    </div>
    <div class="col-md-4">
        <label for="typeproprietaire" class="form-label"></label>
        <select id="inputState" class="form-select" name="type_proprietaires_id">
            @foreach($typeproprietaires as $typeproprietaire)
            <option name="type_proprietaires_id" value="{{$proprietaire->type_proprietaires_id}}" >{{$typeproprietaire->libelle}}</option>
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