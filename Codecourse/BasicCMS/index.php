<?php
	require_once 'app/start.php';
    
    $pages = $db -> query('SELECT id, label, slug FROM pages') -> fetchAll(PDO::FETCH_ASSOC);   //  Pull as associative array
    
    require_once VIEW_ROOT . '/home.php';