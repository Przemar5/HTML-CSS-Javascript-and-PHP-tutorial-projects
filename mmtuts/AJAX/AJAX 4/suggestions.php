<?php
	
	$names = array('Przemek', 'Piotr', 'Jan', 'Daniel');
	
	if(isset($_POST['suggestion'])) {
		$name = $_POST['suggestion'];
		
		if(!empty($name)) {
			foreach($names as $existingName) {
				if(strpos($existingName, $name) !== false) {
					echo $existingName;
				}
			}
		}
	}
	
?>