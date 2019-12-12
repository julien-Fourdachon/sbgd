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

$req = $db->query('SELECT * FROM user');
while($user = $req->fetch()) {
    if ($user['name'] === $name && $user['password'] === $password) {
        $_SESSION['name'] = $name;
        $_SESSION['rank_id'] = intval($user['rank_id']);
        $_SESSION['id'] = $user['id'];
        header("location: ../front/productList.php");
    }
}
if ($_SESSION['name']  === null) {
    header("location: ../../index.php?error");
}
$req->closeCursor();

