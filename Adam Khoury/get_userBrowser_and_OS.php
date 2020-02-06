<?php
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$referingURL = $_SERVER['HTTP_REFERER'];
	$currentPage = $_SERVER['REQUEST_URI'];
	
	echo $ip . '<br>';
	echo $agent . '<br>';
	echo $language . '<br>';
	echo $referingURL . '<br>';
	echo $currentPage . '<br>';
	
	$browserArray = array(	'Windows Mobile'	=>	'IEMobile',
							'Android Mobile'	=>	'Android',
							'iPhone Mobile'		=>	'iPhone',
							'Firefox'			=>	'Firefox',
							'Internet Explorer'	=>	'MSIE',
							'Opera'				=>	'Opera',
							'Safari'			=>	'Safari');
	
	foreach($browserArray as $key => $val) {
		if(preg_match("/$val/", $agent)) {
			break;
		} else {
			$key = 'Browser Unknown';
		}
	}
	
	$browser = $key;
	echo $browser;
	
?>