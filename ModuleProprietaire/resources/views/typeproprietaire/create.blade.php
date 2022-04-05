<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@csrf

    <div>
    <form method="POST" action="typepropretaire/store">
        <select name="typeproprietaires" class="form-select" aria-label="Default select example">
            <option selected>Type proprietaire</option>
            <option value="1">Personnel</option>
            <option value="2">Professionnel</option>
        </select>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    </div>
</body>
</html>