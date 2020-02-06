<?php
    //  1.  
    //  You can rename extension to inc, and it will work the same
    //  ie.: db.inc
    //  But use .php because even if people access file, they won't see the content
    
    //  2.
    //  XSS
    
    require_once 'functions.php';
    require_once 'app/db.php';
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User profile</title>
    </head>
    <body>
        <h2><?php echo e($user -> username); ?></h2>
        <p><?php echo e($user -> img); ?></p>
    </body>
</html>