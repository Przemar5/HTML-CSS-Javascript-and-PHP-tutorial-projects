<?php
	
	//	Nawiązanie połączenia z bazą danych
	
	require_once 'connect.php';
	
	$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
	
	$connection = new PDO($dsn, $dbUser, $dbPassword);
	
	
	//	Rozwiązania
	
	
	//	Zadanie 1
	
	$idklienta = 4;
	
	$sql = 'SELECT imie, nazwisko FROM klienci WHERE idklienta = :idklienta';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['idklienta' => $idklienta]);
	
	$post = $statement -> fetch();
	
	echo '<h2>Rozwiązanie zadania nr 1:</h2>';
	echo 'Imię: ' . $post['imie'] . '<br>';
	echo 'Nazwisko: ' . $post['nazwisko'] . '<br>';
	
	
	//	Zadanie 2
	
	$rocznik = 2010;
	
	$sql = 'SELECT * FROM auta WHERE rocznik = :rocznik';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['rocznik' => $rocznik]);
	
	$post = $statement -> fetch();
	
	echo '<h2>Rozwiązanie zadania nr 2:</h2>';
	echo 'idauta: ' . $post['idauta'] . '<br>';
	echo 'marka: ' . $post['marka'] . '<br>';
	echo 'model: ' . $post['model'] . '<br>';
	echo 'przebieg: ' . $post['przebieg'] . '<br>';
	echo 'rocznik: ' . $post['rocznik'] . '<br>';
	echo 'kolor: ' . $post['kolor'] . '<br>';
	echo 'ubezpieczenie: ' . $post['ubezpieczenie'] . '<br>';
	
	
	//	Zadanie 3
	
	$marka = 'Ford';
	
	$sql = 'SELECT * FROM auta WHERE marka = :marka';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['marka' => $marka]);
	
	//	Nie chciało mi się tege wypisywać
	$rowNum = $statement -> rowCount();
	
	echo '<h2>Rozwiązanie zadania nr 3:</h2>';
	echo $rowNum;	//	Zgadza się, są 2 rekordy
	
	
	//	Zadanie 4
	
	$sql = 'SELECT * FROM auta WHERE idauta BETWEEN 2 AND 4';
	$statement = $connection -> prepare($sql);
	$statement -> execute();
	
	$posts = $statement -> fetchAll();
		
	echo '<h2>Rozwiązanie zadania nr 4:</h2>';
	foreach($posts as $post) {
		echo $post['model'] . '<br>';
	}
	
	
	//	Zadanie 5
	
	$adressPart = 'Rolna%';
	$miasto = 'Katowice';
	
	$sql = 'SELECT imie, nazwisko FROM klienci WHERE adres LIKE ? AND miasto = ?';
	$statement = $connection -> prepare($sql);
	$statement -> execute([$adressPart, $miasto]);
	
	$posts = $statement -> fetchAll();
	
	echo '<h2>Rozwiązanie zadania nr 5:</h2>';
	
	foreach($posts as $post) {
		echo 'imie: ' . $post['imie'] . '<br>';
		echo 'nazwisko: ' . $post['nazwisko'] . '<br>';
	}
	
	
	//	Zadanie 6
	
	$connection -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$sql = 'SELECT marka, model FROM auta ORDER BY ubezpieczenie DESC LIMIT 1';
	$statement = $connection -> prepare($sql);
	$statement -> execute();
	
	$post = $statement -> fetch();
	
	echo '<h2>Rozwiązanie zadania nr 6:</h2>';
	echo 'marka: ' . $post['marka'] . '<br>';
	echo 'model: ' . $post['model'] . '<br>';
	
	
	//	Zadanie 7
	
	$sql = 'SELECT a.idauta, a.marka, a.model FROM auta AS a, wypozyczenia AS w WHERE a.idauta = w.idauta ORDER BY w.datawyp ASC LIMIT 1';
	$statement = $connection -> prepare($sql);
	$statement -> execute();
	
	$post = $statement -> fetch();
	
	echo '<h2>Rozwiązanie zadania nr 7:</h2>';
	echo 'marka: ' . $post['marka'] . '<br>';
	echo 'model: ' . $post['model'] . '<br>';
	
	
	//	Zadanie 8
	//	Przykład zapytania, którego nie udało się wykonać później
	$idauta = 1;
	
	$sql = 'SELECT k.imie, k.nazwisko FROM wypozyczenia AS w, klienci AS k WHERE k.idklienta = w.idklienta AND w.idauta = :idauta';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['idauta' => $idauta]);
	
	$posts = $statement -> fetchAll();
	
	echo '<h2>Rozwiązanie zadania nr 8:</h2>';
	
	foreach($posts as $post) {
		echo 'imie: ' . $post['imie'] . '<br>';
		echo 'nazwisko: ' . $post['nazwisko'] . '<br>';
	}
	
	
	//	Zadaie 9
	/*
	$idklienta = 4;
	
	$sql = 'SELECT a.marka, a.model FROM auta AS a, wypozyczenia AS w WHERE a.idklienta = w.idklienta AND w.idklienta = :idklienta';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['idklienta' => $idklienta]);	//	!
	
	$post = $statement -> fetchAll();
	
	echo '<h2>Rozwiązanie zadania nr 9:</h2>';
	
	foreach($posts as $post) {
		echo 'marka: ' . $post['marka'] . '<br>';
		echo 'model: ' . $post['model'] . '<br>';
	}
	*/
	
	//	Zadanie 10
	
	$nazwisko = 'Pastewniak';
	
	$sql = 'SELECT a.marka, a.model FROM auta AS a, klienci AS k, wypozyczenia AS w WHERE k.nazwiosko = ? AND k.idklienta = w.idklienta AND a.idauta = w.idauta';
	$statement = $connection -> prepare($sql);
	$statement -> execute([$nazwisko]);
	
	$posts = $statement -> fetchAll();
	
	echo '<h2>Rozwiązanie zadania nr 9:</h2>';
	
	foreach($posts as $post) {
		echo 'marka: ' . $post['marka'] . '<br>';
		echo 'model: ' . $post['model'] . '<br>';
	}
	
?>