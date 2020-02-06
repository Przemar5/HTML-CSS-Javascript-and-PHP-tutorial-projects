<?php
    session_start();
    
    $_SESSION['user_id'] = 1;
    
    require_once 'db.php';
    