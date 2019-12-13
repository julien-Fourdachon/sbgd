<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Add user</title>
</head>
<body>
    <?php
        if (isset($_GET['success'])) {
            echo "<p class=\"success\">Utilisateur \"" . $_GET['user'] . "\" créé avec succès</p>";
        } 
        ?>
        <h3>Créer un nouveau compte utilisateur</h3>
        <form method="post" action="../back/createUser.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Niveau d'autorisation</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="rank">
                <small> 1 = admin, 2 = utilisateur, si vous entrez une autre valeur que 1 ou 2, le trigger mettra le choix 2 par default</small>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
        <form action="adminUser.php">
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