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
    @csrf
    <h2>Ajouter Proprietés</h2>
<div class="container">
    <form class="row g-3" action="{{route('proprietaires.store')}}" method="POST">
    <div class="col-md-6">
        <label  class="form-label">Nom du proprieté</label>
        <input  name="nom" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Superficie</label>
        <input  class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre d'étages</label>
        <input  class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Montant</label>
        <input  name="civilite" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Statut</label>
        <input  name="telephone" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
        <label for="typeproprietaire" class="form-label">Proprietaire</label>
        <select id="inputState" class="form-select" name="typeproprietaire_id">
        <option value="1" selected></option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
    </form>
</div>
</body>
</html>