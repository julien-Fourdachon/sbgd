<?php

$title = $_POST['title'];
$picture = $_POST['picture'];
$description = $_POST['description'];
$price = intval($_POST['price']);
$id = $_POST['id'];

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}
$stmt = $db->prepare("UPDATE product SET title = :new_title, description = :new_description, picture = :new_picture, price = :new_price WHERE id = :id");
$stmt->bindParam(':new_title', $title, PDO::PARAM_STR);
$stmt->bindParam(':new_description', $description, PDO::PARAM_STR);
$stmt->bindParam(':new_picture', $picture, PDO::PARAM_STR);
$stmt->bindParam(':new_price', $price, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

header("location: ../front/productList.php?updateSuccess");
