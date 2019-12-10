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
$admin = false;
if ($name === "admin" && $password === "admin") {
    $admin = true;
}
$users = $db->prepare("SELECT * FROM users");
$products = $db->prepare("SELECT * FROM products");

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
    <header>
        <h3>Voici la shopping list du jour</h3>
        <?php
        if($admin) {
            echo "<button type=\"button\" class=\"btn btn-info\">Ajouter un article</button>";
        }
        ?>
    </header>
    <main>
        
        <?php 
            if ($products->execute(array($_GET['name']))) {
                $productExist = $products->fetchAll();
                foreach($productExist as $product) {
                echo"<div class=\"content\">
                        <div class=\"pic\"><img src=\"" . $product["picture"] . "\"/></div>
                        <div class=\"description\">" . $product["description"] . "</div>
                        <div class=\"price\">" . $product["price"] . " euros</div>   
                    </div>";
                    if($admin) {
                        echo "<button type=\"button\" class=\"btn btn-success\">Modifier</button>
                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>";
                    }
                }
            }
        ?>       
        </div>
    </main>
</body>
</html>