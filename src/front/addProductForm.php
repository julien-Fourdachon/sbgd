<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Ajout produit</title>
</head>
<body>
    <h3>Ajouter un nouveau produit</h3>
    <form method="post" action="../back/addProduct.php" class="add-product">
        <div class="form-group">
            <label for="exampleInputEmail1">Titre du produit</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="picture" placeholder="Placez l'url de l'image ici">
        </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" class="form-control" id="exampleInputPassword1" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Prix</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="price">
            </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
    <form action="productList.php">
        <button type="submit" class="btn btn-primary">Retour</button>
    </form>
</body>
</html>