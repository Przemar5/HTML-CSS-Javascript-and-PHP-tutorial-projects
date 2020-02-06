<?php
	
	# COMMENT
	
	date_default_timezone_set('UTC');
	echo date('h:i:s:u a, l F jS Y e') . '<br>';
	/*
	$var = 3;
	$ref = &$var;
	
	//echo $ref;
	
	$arr = array(2 => 40, 3 => 30, 1 => 50, 4 => 20, 5 =>10);
	
	ksort($arr, SORT_NUMERIC);
	
	foreach($arr as $key => $val) {
		echo $key . ' => ' . $val . '<br>';
	}
	
	echo '<br>';
	
	$nextArr = array(2, 4, 5, 3, 1);
	rsort($nextArr);
	
	$i = 0;
	
	while($i < count($nextArr)) {
		echo $nextArr[$i++] . '<br>';
	}
	*/
	
	$str = "   Napis   ";
	
	echo ltrim($str);
?>