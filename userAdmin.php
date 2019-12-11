<?php
    session_start();
    try {
        $db = new PDO('mysql:host=localhost;dbname=test', "test", "test");
    } catch (PDOException $e) {
        var_dump("Erreur !: " . $e->getMessage() . "<br/>");
        die();
    }
    var_dump($_SESSION);
    $user = $db->prepare("SELECT * FROM user
                            INNER JOIN rank 
                            ON user.rank_id = rank.rank_id");
    if ($user->execute(array($_GET['name']))) {
        $userExist = $user->fetchAll();
        foreach($userExist as $user) {
            if($_SESSION['rank'] = $user['rank_id'])
            var_dump($user);
        } 
    }               
?>