<?php

$name = $_POST['name'];
$password = $_POST['password'];
$rank_id = intval($_POST['rank_id']);
$id = $_POST['id'];

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}
$stmt = $db->prepare("UPDATE user SET name = :new_name, password = :new_password, rank_id = :new_rank_id WHERE id = :id");
$stmt->bindParam(':new_name', $name, PDO::PARAM_STR);
$stmt->bindParam(':new_password', $password, PDO::PARAM_STR);
$stmt->bindParam(':new_rank_id', $rank_id, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

header("location: ../front/adminUser.php?updateSuccess");
