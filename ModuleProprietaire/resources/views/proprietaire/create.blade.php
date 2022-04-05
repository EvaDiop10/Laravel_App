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
    <form class="row g-3" method="POST" action="{{route('proprietaires.store')}}" >
    @csrf
    <div class="col-md-6">
        <label  class="form-label">nom</label>
        <input  name="nom" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prenom</label>
        <input name="prenom"  class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Sexe</label>
        <select id="inputState" class="form-select" name="sexe">
        <option selected></option>
        <option>Homme</option>
        <option>Femme</option>
        </select>
    </div>
    <div class="col-md-6">
        <label  class="form-label">Civilite</label>
        <input  name="civilite" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Date de naissance</label>
        <input  type="date" name="date_naissance" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">CNI</label>
        <input  name="cni" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Téléphone</label>
        <input  name="telephone" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Code Proprietaire</label>
        <input  name="code_proprietaire" class="form-control" id="inputEmail4"  placeholder="Prop-CNI">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input name="adresse" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12 ">
        <label for="inputAddress2" class="form-label">Photo</label>
        <input name="photo" type="file" class="form-control" enctype='multipart/form-data' id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">nationalite</label>
        <select id="inputState" class="form-select" name="nationalite">
        <option selected>Choose...</option>
        <option>Sénégalais</option>
        <option>Ivoirien</option>
        <option>Camerounais</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="typeproprietaire" class="form-label">Type proprietaire</label>
        <select id="inputState" class="form-select" name="type_proprietaires_id">
            @foreach($typeproprietaires as $typeproprietaire)
            <option name="type_proprietaires_id" value="{{$typeproprietaire->id}}" >{{$typeproprietaire->libelle}}</option>
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