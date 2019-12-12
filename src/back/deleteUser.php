<?php

session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
} catch (PDOException $e) {
    var_dump("Erreur !: " . $e->getMessage() . "<br/>");
    die();
}

$deleteUser = $db->prepare("DELETE FROM user WHERE id = " . $_GET['id']);
$deleteUser->execute();


header("location: ../front/adminUser.php?success");