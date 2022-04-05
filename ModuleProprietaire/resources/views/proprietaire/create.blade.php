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
    <form class="row g-3" action="store" method="POST" enctype= "multipart/form-data">
    @csrf
    <div class="col-md-12">
        <label for="typeproprietaire" class="form-label">Type proprietaire</label>
        <select id="type_proprietire" class="form-select" name="type_proprietaires_id">
            @foreach ($typeproprietaires as $typeproprietaire) )
                <option value="{{$typeproprietaire->id}}">{{$typeproprietaire->libelle}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label  class="form-label">nom</label>
        <input  name="nom" class="form-control" id="nom">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prenom</label>
        <input  class="form-control" id="prenom" name="prenom">
    </div>
    <div class="col-md-4">
        <label  class="form-label">Sexe</label>
        <select id="sexe" class="form-select" name="sexe">
        <option selected></option>
        <option value="H">Homme</option>
        <option value="F">Femme</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">nationalite</label>
        <select id="inputState" class="form-select" name="nationalite">
        <option selected>Choose...</option>
        <option value="Senegal">Sénégalais</option>
        <option value="Côte d'Ivoire">Ivoirien</option>
        <option value="Cameroun">Camerounais</option>
        </select>
    </div>
    <div class="col-md-4">
        <label  class="form-label">Civilite</label>
        <input  name="civilite" class="form-control" id="civilite">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Date de naissance</label>
        <input  type="date" name="date_naissance" class="form-control" id="date_naissance">
    </div>
    <div class="col-md-6">
        <label  class="form-label">CNI</label>
        <input  name="cni" class="form-control" id="cni">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Téléphone</label>
        <input  name=" telephone" class="form-control" id="telephone">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Address</label>
        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12 ">
        <label for="inputAddress2" class="form-label">Photo</label>
        <input type="file" class="form-control" id="photo" aria-describedby="inputGroupFileAddon04"  name="photo" aria-label="Upload">
    </div>


    <div class="col-5 my-2">
        <button type="submit" class="btn btn-primary col-6 ">Ajouter</button>
    </div>
    </form>
</div>
</body>
</html>
