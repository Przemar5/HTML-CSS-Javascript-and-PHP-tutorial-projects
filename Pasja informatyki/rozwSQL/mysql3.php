<?php
	
	echo '<h1>Rozwiązania zadań</h1>';
	
	
	//	Zadanie 1
	
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_USER', 'root');
	DEFINE('DB_PASSWORD', '');
	DEFINE('DB_NAME', 'ksiegarnia');
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			OR die('Cannot connect to database.<br>Error: '
					. mysqli_connect_error());
	
	$query = 'UPDATE klienci SET nazwisko="Psikuta" WHERE idklienta=4';
	
	$response = mysqli_query($conn, $query);
	
	if($response == 1) {
		echo 'Operacja przebiegła pomyślnie';
	} else {
		echo '<span style="color: red;>"Nie udało się wykonać operacji!</span>';
	}
	
	mysqli_close($conn);
	
	
	//	Zadanie 2
	//	PDO
	
	$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
	
	$conn = new PDO($dsn, DB_USER, DB_PASSWORD);
	
	$query = 'UPDATE klienci SET idklienta=? WHERE idklienta=?';
	$stmt = $conn -> prepare($query);
	$stmt -> execute([1, 3]);
	
	
	//	Zadanie 3
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Cannot connect to the database<br>
			Error: ' . mysqli_connect_error());
	
	$query = 'UPDATE ksiazki SET cena=ROUND(1.1*cena, 2)';
	
	$response = mysqli_query($conn, $query);
	
	if($response) {
		echo '<h2>Zadanie 3:</h2>';
		echo 'Operacja się powiodła<br>';
		
		$query = 'SELECT * FROM ksiazki';
0		
		$response = mysqli_query($conn, $query);
		
		if($response) {
			while($row = mysqli_fetch_array($response)) {
				echo $row['cena'] . '<br>';
			}
		}
		
	} else {
		echo '<span style="color: red;>"Nie udało się wykonać operacji!</span>';
		echo mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	
	
	//	Zadanie 4
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			OR die('Cannot connect to database<br>Error: '
					. mysqli_connect_error());
	
	$query = 'UPDATE ksiazki SET cena=(cena-10) ORDER BY cena DESC LIMIT 1';
	
	$result = mysqli_query($conn, $query);
	
	if($result) {
		echo '<h2>Zadanie 4:</h2>';
		echo 'Operacja się powiodła<br>';
		
		
		$query = 'SELECT cena FROM ksiazki ORDER BY cena DESC';
		
		$result = mysqli_query($conn, $query);
		
		if($result) {
			$rows = mysqli_affected_rows($conn);
			
			echo $rows;
		} else {
			echo mysqli_error($conn);
		}
	} else {
		echo mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	
	
	//	Zadanie 5
	
	$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	$query = 'UPDATE klienci SET imie="Joanna", nazwisko="Dostojewska" WHERE imie="Anna" AND nazwisko="Karenina"';
	
	$result = @mysqli_query($conn, $query);
	
	if($result) {
		echo '<h2>Zadanie 5:</h2>';
		echo 'Operacja się powiodła<br>';
		
		echo 'Zmienionych rekordów: ' . mysqli_affected_rows($conn);
	} else {
		echo mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	
	
	//	Zadanie 6
	/*
	$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	$query = 'UPDATE status="wyslano" FROM zamowienia WHERE idzamowienia BETWEEN ? AND ?';
	
	$stmt = mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, "ii", 4, 5);
	mysqli_stmt_execute($stmt);
	
	$rows = mysqli_stmt_affected_rows($stmt);
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	*/
	
	
	$first = 4;
	$second = 5;
	
	$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
	
	$conn = new PDO($dsn, DB_USER, DB_PASSWORD);
	
	$conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
	
	$query = 'UPDATE status="wyslano" FROM zamowienia WHERE idzamowienia BETWEEN ? AND ?';
	$stmt = $conn -> prepare($query);
	$stmt -> execute([$first, $second]);
	
	echo '<h2>Zadanie 6:</h2>';
	echo 'Operacja się powiodła<br>';
	
	//	22 minuta
?>
