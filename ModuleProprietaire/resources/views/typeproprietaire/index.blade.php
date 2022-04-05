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
            <select name="typeproprietaire_id" id="">Selectionnez le type
                @foreach($typeproprietaire as $typeproprietaires)
                <option value="1">{{$typeproprietaire->libelle}}</option>
                @endforeach
            </select>
        </div>
</body>
</html>