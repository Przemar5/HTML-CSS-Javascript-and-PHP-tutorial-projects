<?php
	
	$string = "Mary had a litle gorilla. The godilla is fine.";
	
	if(preg_match("/gorilla/", $string)) {
		echo 'The lamb is found!<br>';
	}
	
	if(preg_match("/gorilla/", $string, $array)) {
		print_r($array);
		echo '<br>';
	}
	
	//	preg_match()	->	if exists, then stops
	
	if(preg_match_all("/(go)ri(lla)/", $string, $array)) {
		print_r($array);
		echo '<br><br>' . $array[0][0];
	}
	
	
	$string2 = preg_replace("/gorilla/", "godzilla", $string);
	
	echo $string2 . '<br><br>';
	
	
	//	60
	
	echo preg_match("/./", $string) . '<br>';				//	Search for any character
	echo preg_match("/(a|e)/", $string) . '<br>';			//	Search for 'a' OR 'e'
	echo preg_match("/[abc]/", $string) . '<br>';			//	Search for 'a', 'b' OR 'c'
	echo preg_match("/[^a]/", $string) . '<br>';			//	Search for any character which is not 'a', 'b' OR 'c'
	echo preg_match("/[a-z]/", $string) . '<br>';			//	Search for any character which is between 'a' and 'z'
	echo preg_match("/[0-9a-zA-Z]/", $string) . '<br>';		//	Search for any character which is between 'a' and 'z'
	
	//	Doesn't work as on tutorial
	echo preg_match_all("/go*/", $string, $array) . '<br>';		//	How many
	print_r($array);
	
	//	Doesn't work as on tutorial
	echo preg_match_all("/go.*a/", $string) . '<br>';
	echo preg_match_all("/go.*a/", $string, $array) . '<br>';		//	
	print_r($array);
	
	//	Doesn't work as on tutorial
	echo preg_match_all("/go+/", $string) . '<br>';
	echo preg_match_all("/go+/", $string, $array) . '<br>';		//	
	print_r($array);
	
	//	Doesn't work as on tutorial
	echo preg_match_all("/l{2}/", $string) . '<br>';
	echo preg_match_all("/l{2}/", $string, $array) . '<br>';		//	in the row
	print_r($array);
	
	//	Doesn't work as on tutorial
	echo preg_match_all("/g.*a/", $string) . '<br>';
	echo preg_match_all("/g.*a/", $string, $array) . '<br>';		//	in the row
	print_r($array);
	
?>