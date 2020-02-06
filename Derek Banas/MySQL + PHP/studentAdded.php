<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="utf-8">
		
		<title>Student added</title>
		
	</head>
	
	<body>
		
		<?php
			
			function check($colName, $data_missing, $data) {
				if(empty($_POST[$colName])) {
					$data_missing[] = $colName;
				} else {
					$data[$colName] = trim($_POST[$colName]); 
					
					echo $data[$colName] . '<br>';
				}
			}
			
			if(isset($_POST['submit'])) {
				$data_missing = array();
				$data = array();
				
				if(empty($_POST['first_name'])) {
					$data_missing[] = 'First name';
				} else {
					$firstName = trim($_POST['first_name']);
				}
				
				if(empty($_POST['last_name'])) {
					$data_missing[] = 'Last name';
				} else {
					$lastName = trim($_POST['last_name']);
				}
				
				if(empty($_POST['email'])) {
					$data_missing[] = 'email';
				} else {
					$email = trim($_POST['email']);
				}
				
				if(empty($_POST['street'])) {
					$data_missing[] = 'Street';
				} else {
					$street = trim($_POST['street']);
				}
				
				if(empty($_POST['city'])) {
					$data_missing[] = 'City';
				} else {
					$city = trim($_POST['city']);
				}
				
				if(empty($_POST['state'])) {
					$data_missing[] = 'State';
				} else {
					$state = trim($_POST['state']);
				}
				
				if(empty($_POST['zip'])) {
					$data_missing[] = 'Zip code';
				} else {
					$zip = trim($_POST['zip']);
				}
				
				if(empty($_POST['phone'])) {
					$data_missing[] = 'phone';
				} else {
					$phone = trim($_POST['phone']);
				}
				
				if(empty($_POST['birth_date'])) {
					$data_missing[] = 'Birth date';
				} else {
					$birthDate = trim($_POST['birth_date']);
				}
				
				if(empty($data_missing)) {
					require_once('mysqli_connect.php');
					
					$query = 	'INSERT INTO student (NULL,
								first_name, last_name, email,
								street, city, state, zip, phone,
								birth_date, sex, date_entered) 
								VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())';
					
					$statement = mysqli_prepare($conn, $query);
					
					mysqli_stmt_bind_param($statement, "dsssssssssss",
											$firstName,
											$lastName,
											$email,
											$street,
											$city,
											$state,
											$zip,
											$phone,
											$birthDate,
											$sex,);
					
					//	i	Integers
					//	d	Double
					//	b	Blobs
					//	s	Everything else
						
					mysqli_stmt_execute($statement);
					
					$affectedRows = mysqli_stmt_affected_rows($statement);
					
					if($affectedRows == 1) {
						echo 'Student added';
					} else {
						echo 'Error occurred: ';
						echo mysqli_error();
					}
					
					mysqli_stmt_close($statement);
					
					mysqli_close($conn);
				}
				
				
			} else {
				echo 'You need to enter the following data:<br>';
				
				foreach($data_missing as $dm) {
					echo $dm . '<br>';
				}
			}
			
		?>
		
		
		<form action="studentAdded.php" method="post">
			
			<h2>Add a new student</h2>
			
			<label>
				<p>First name: <input type="text" name="first_name"></p>
			</label>
			
			<label>
				<p>Last name: <input type="text" name="last_name"></p>
			</label>
			
			<label>
				<p>E-mail: <input type="email" name="email"></p>
			</label>
			
			<label>
				<p>Street: <input type="text" name="street"></p>
			</label>
			
			<label>
				<p>City: <input type="text" name="city"></p>
			</label>
			
			<label>
				<p>State: <input type="text" name="state"></p>
			</label>
			
			<label>
				<p>Zip: <input type="number" name="zip"></p>
			</label>
			
			<label>
				<p>Phone: <input type="tel" name="phone"></p>
			</label>
			
			<label>
				<p>Birth date: <input type="date" name="birth_date"></p>
			</label>
			
			<fieldset>
				<legend>Sex</legend>
				<label><input type="radio" name="sex" value="M" checked="checked"> Male</label>
				<label><input type="radio" name="sex" value="F"> Female</label>
			</fieldset>
			
			<br>
			
			<button type="submit" name="submit" value="Send">Register</button>
			
		</form>
		
	</body>
	
</html>