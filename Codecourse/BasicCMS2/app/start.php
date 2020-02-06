<?php
    ini_set('display_errors', 'On');

    define('APP_ROOT', __DIR__);
    define('BASE_URL', 'http://localhost/files/XAMPP/XAMPP/PHP_lessons/Codecourse/BasicCMS2');
    define('VIEW_ROOT', APP_ROOT . '/views');

    $db = new PDO('mysql:host=localhost;dbname=codecourse_cms', 'root', '');
    