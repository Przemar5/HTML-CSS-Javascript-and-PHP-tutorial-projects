<ul>
<?php
	
	include_once 'server-info.php';
	
	foreach($server as $key => $value) {
		echo "<li>$key:    $value</li>";
	}
	
	foreach($client as $key => $value) {
		echo "<li>$key:    $value</li>";
	}
?>
</ul>