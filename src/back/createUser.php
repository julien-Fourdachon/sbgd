<?php

$name = $_POST['name'];
$password = $_POST['password'];
$rank_id = intval($_POST['rank_id']);
try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}

$stmt = $db->prepare("INSERT INTO user (name, password, rank_id) VALUES (:name, :password, :rank_id)");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->bindParam(':rank_id', $rank_id, PDO::PARAM_INT);
$stmt->execute();

header("location: ../front/addUserForm.php?success&user=".$name);


