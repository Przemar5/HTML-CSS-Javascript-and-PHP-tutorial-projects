<?php
    $password = '$2y$12$uIlIm.ylQ3eHRyMJvcW3A.HP2U0DtF9PBNoghhx.QFb7p.PiatUgm';
    $submittedPassword = 'ilovecats33';
    
    $result = password_verify($submittedPassword, $password);
    var_dump($result);