<?php
	
	header('Content-Type: text/xml');
	
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	echo '<response>';
	
		$food = $_GET['food'];
		$foodArray = array('strawberries', 'cheries', 'beead', 'bananas');
		
		if(in_array($food, $foodArray)) {
			echo 'We do have ' . $food . '!';
		
		} else if($food == '') {
			echo 'Please enter the food';
			
		} else {
			echo 'Sorry, we don\'t have ' . $food;
		}
	
	echo '</response>';
	
	
?>