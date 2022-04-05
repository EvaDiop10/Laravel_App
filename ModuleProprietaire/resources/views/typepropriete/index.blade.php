<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mb-3">
            <select name="type_propriete_id" id="">Selectionnez le type
                @foreach($typeproprietes as $typepropriete)
                <option value="{{$typepropriete->id}}">{{$typepropriete->libelle}}</option>
                @endforeach
            </select>
        </div>
</body>
</html>