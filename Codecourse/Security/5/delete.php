<?php
    require_once 'bootstrap.php';
    
    $delete = $db -> prepare('
        UPDATE users 
        SET active = 0
        WHERE id = :user_id
    ');
    $delete -> execute([
        'user_id' => $_SESSION['user_id']
    ]);