<?php
session_start();

$name = $_POST["name"];
$password = $_POST["password"];
try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}

$user = $db->prepare("SELECT * FROM user");
$product = $db->prepare("SELECT * FROM product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>shopList</title>
</head>
<body>
    <header class="header">
        <div class="admin-header">
            <h3>Voici la shopping list du jour</h3>
            <?php
                if($_SESSION['name']) {
                    echo "<div class=\"admin-buttons\">";
                    echo "<a href=\"addProduct.php\" type=\"button\" class=\"btn btn-info\">Ajouter un article</a>";
                    if ($_SESSION['rank_id']) {
                        echo "<a href=\"addUserForm.php\" type=\"button\" class=\"btn btn-info\">Créer utilisateur</a>";
                    } else {
                        echo "<a href=\"userAdmin.php\" type=\"button\" class=\"btn btn-info\">Gérer les utilisateurs</a>";
                    } 
                    echo "<a href=\"logout.php\" type=\"button\" class=\"btn btn-info\">Déconnexion</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </header>
    <main>  
        <?php 
            if ($product->execute(array($_GET['title']))) {
                $productExist = $product->fetchAll();
                foreach($productExist as $product) {
                echo"<div class=\"content\">
                        <div class=\"pic\"><img src=\"" . $product["picture"] . "\"/></div>
                        <div class=\"description\"><p class=\"title\">" . $product["title"] . "</p>" . $product["description"] . "</div>
                        <div class=\"price\">
                        <div>" . $product["price"] . " euros</div> 
                        <div><p class=\"buy\">Ajouter au panier</p></div>  
                        </div>
                    </div>";
                    if($_SESSION['rank_id']) {
                        echo "<button type=\"button\" class=\"btn btn-success\">Modifier</button>
                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>";
                    }
                }
            }
        ?>       
    </main>
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