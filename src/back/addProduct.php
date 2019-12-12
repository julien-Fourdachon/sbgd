<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = intval($_POST['price']);
$description = $_POST['description'];

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}

$stmt = $db->prepare("INSERT INTO product (title, description, picture, price) VALUES (:title, :description, :picture, :price)");
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':description', $description, PDO::PARAM_STR);
$stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
$stmt->bindParam(':price', $price, PDO::PARAM_INT);
$stmt->execute();

header("location: ../front/productList.php?product");
