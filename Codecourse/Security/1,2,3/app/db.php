<?php
    //$date = new DateTime('+1 week');
    //setcookie('session', 'abc', $date -> getTimeStamp());
    $db = new PDO('mysql:host=127.0.0.1;dbname=codecourse_cms', 'root', '');
    
//  2
    if(!isset($_GET['username'])) {
        die();
    }
    
    $user = $db -> prepare('SELECT * FROM users WHERE username = :username');
    $user -> execute([
        'username' => $_GET['username']
    ]);
    
    $user = $user -> fetchObject();
    
?>