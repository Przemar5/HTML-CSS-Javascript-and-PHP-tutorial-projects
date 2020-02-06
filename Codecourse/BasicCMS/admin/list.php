<?php
    require_once '../app/start.php';
    
    $pages = $db 
        -> query('SELECT id, label, title, slug FROM pages ORDER BY created DESC')
        -> fetchAll(PDO::FETCH_ASSOC);
    
    require_once VIEW_ROOT . '/admin/list.php';