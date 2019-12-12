<?php
    session_start();
    try {
        $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
    } catch (PDOException $e) {
        var_dump("Erreur !: " . $e->getMessage() . "<br/>");
        die();
    }
    
    $user = $db->prepare("SELECT * FROM user INNER JOIN rank on user.rank_id = rank.rank_id WHERE id > 1");
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
    <title>Administration</title>
</head>
<body>
    <?php if (isset($_GET['success'])) echo "<p class=\"success\">Utilisateur supprimé avec succès</p>" ?>
    <a class="create" href="addUserForm.php" type="button" class="btn btn-info">Créer un nouvel utilisateur</a>
    <h3>Liste des utilisateurs existants</h3>
    <div class="list-title"><p class="name-title">Nom</p><p class="level-title name-title">Niveau d'autorisation</p></div>
    <?php 
        if ($user->execute(array($_GET['name']))) {
            $userExist = $user->fetchAll();
            foreach($userExist as $user) {
            echo"<div class=\"row\">
                    <div>" . $user["name"] . "</div>
                    <div>" . $user["level"] . "</div>";
                    if($_SESSION['rank_id'] === 1) {
                        echo "<a href=\"updateUserForm.php?id=" . $user["id"] . "&name=" . $user["name"] . "&password=" . $user["password"] . "&rank_id=" . $user["rank_id"] . "\" type=\"button\" class=\"btn btn-success\">Modifier</a>
                        <a href=\"../back/deleteUser.php?id=" . $user["id"] . "\" type=\"button\" class=\"btn btn-danger\">Supprimer</a>";
                    }
                echo "</div>";
            }
        }
    ?>  
    <form action="productList.php">
        <button type="submit" class="btn btn-primary">Retour</button>
    </form>
</body>
</html>