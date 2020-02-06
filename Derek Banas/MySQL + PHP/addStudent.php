<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="utf-8">
		
		<title>Add Student</title>
		
	</head>
	
	<body>
		
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