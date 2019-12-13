<?php

session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}

$deleteProduct = $db->prepare("DELETE FROM product WHERE id = " . $_GET['id']);
$deleteProduct->execute();
header("location: ../front/productList.php?deleteSuccess");