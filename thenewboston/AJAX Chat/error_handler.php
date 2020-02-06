<?php
	
	set_error_handler('errorHandler', E_ALL);
	
	function errorHandler($number, $text, $file, $line) {
		if(ob_get_length()) {
			ob_clean();
			$errorMessage = 'Error: ' . $number . chr(10) . 
							'Message: ' . $text . chr(10) .
							'File: ' . $file . chr(10) .
							'Line: ' . $line;
			echo $errorMessage;
			exit;
		}
	}
	
?>