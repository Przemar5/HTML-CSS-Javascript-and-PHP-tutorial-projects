<?php
	
	require_once('mysqli_connect.php');
	
	//	echo 'Dołączono mysqli_connect.php...<br>';
	
	$query = 'SELECT * FROM student';
	
	$response = mysqli_query($conn, $query);
	
	//	echo 'Wykonano zapytanie...<br>';
	
	if($response) {
		//	echo 'Udało się!';
		echo 
		'<table>
			<tr>
				<td align="left"><b>First name</b></td>
				<td align="left"><b>Last name</b></td>
				<td align="left"><b>E-mail</b></td>
				<td align="left"><b>Street</b></td>
				<td align="left"><b>City</b></td>
				<td align="left"><b>State</b></td>
				<td align="left"><b>Zip</b></td>
				<td align="left"><b>Phone</b></td>
				<td align="left"><b>Birth date</b></td>
			</tr>';
			
		while($row = mysqli_fetch_array($response)) {
			echo
			'<tr>
				<td align="left">' . $row['first_name'] . '</td>
				<td align="left">' . $row['last_name'] . '</td>
				<td align="left">' . $row['email'] . '</td>
				<td align="left">' . $row['street'] . '</td>
				<td align="left">' . $row['city'] . '</td>
				<td align="left">' . $row['state'] . '</td>
				<td align="left">' . $row['zip'] . '</td>
				<td align="left">' . $row['phone'] . '</td>
				<td align="left">' . $row['birth_date'] . '</td>
			</tr>';
				
		}
		
		echo '</table>';
		
	} else {
		echo 'Cannot issue database query';
		echo mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
?>