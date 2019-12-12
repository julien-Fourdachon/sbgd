<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Update product</title>
</head>
<body>
        <h3>Modifir un produit</h3>
        <form  class="add-product" method="post" action="../back/updateProduct.php">
            <div class="form-group none">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value=<?="" .$_GET['id']."" ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value=<?="" .$_GET['title']."" ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" name="description"><?= $_GET['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="picture" value=<?= $_GET['picture'] ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Prix</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="price" value=<?="" .$_GET['price']."" ?>>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
        <form action="productList.php">
                <button type="submit" class="btn btn-primary">Retour</button>
            </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>    
</body>
</html>