<?php
require_once('config.php');
require_once('functions.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user findUser($username);

if(count($user) > 1) {
    exit('You have duplicate username in your table');
}

if(count($user) === 0 || !password_verify($password, $user[0]['password'])) {
    exit('Username or passsword is invalid');
}
$user = $user[0];
if(loginUser($user)) {
    echo 'User is logged in';
} else {
    echo 'Couldn\'t log in user';
}