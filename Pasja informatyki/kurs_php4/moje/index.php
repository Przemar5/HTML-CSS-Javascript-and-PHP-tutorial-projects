<?php
	/*
	echo time() . '<br>';
	
	echo mktime(1, 3, 2, 4, 2, 2005) . '<br>';
	
	echo date('Y-m-d H:i:s:u ') . '<br>';
	
	$dateTime = new DateTime();
	
	echo $dateTime -> format('Y');
	
	$day = 252;
	$month = 7;
	$year = 1875;
	
	if(checkdate($month, $day, $year)) {
		echo 'YES';
	} else {
		echo 'NO';
	}
	*/
	
	$dateTime = new DateTime('1970-01-01 00:00:00');
	
	$now = new DateTime();
	
	$diff = $dateTime -> diff($now);
	
	echo $diff -> format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
?>