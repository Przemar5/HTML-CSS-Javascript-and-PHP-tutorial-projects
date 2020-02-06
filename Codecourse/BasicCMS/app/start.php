<?php
    ini_set('display_errors', 'On');
    
    define('APP_ROOT', __DIR__);
    define('BASE_URL', 'http://localhost/files/XAMPP/XAMPP/PHP_lessons/Codecourse/BasicCMS');
	define('VIEW_ROOT', APP_ROOT . '/views');
    
	$db = new PDO('mysql:host=127.0.0.1;dbname=codecourse_cms;', 'root', '');
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    require_once 'functions.php';