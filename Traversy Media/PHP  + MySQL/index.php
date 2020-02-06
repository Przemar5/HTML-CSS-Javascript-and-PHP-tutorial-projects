<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbName = 'pdoposts';
	
	//	Set DSN
	$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
	
	//	Create a PDO instance
	$connection = new PDO($dsn, $user, $password);
	$connection -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
	//	Disabling emulation mode
	$connection -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	//	PDO Query
	/*
	$statement = $connection -> query("SELECT * FROM posts");
	
	while($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
		echo $row['title'] . '<br>';
	}
	
	while($row = $statement -> fetch(PDO::FETCH_OBJ)) {
		echo $row -> title . '<br>';
	}
	*/
	
	
	
	//	Prepared statements (prepare & execute)
	
	//	Unsafe
	//$sql = "SELECT * FROM posts WHERE author = '$author'";
	
	
	//	Fetch multiple posts
	
	//	User input
	// $author = 'Przemek Krogulski';
	
	//	Positional parameters
	/*
	$sql = 'SELECT * FROM posts WHERE author = ?';
	$statement = $connection -> prepare($sql);
	$statement -> execute([$author]);
	*/
	
	
	//	For associative arrays
	/*
	$sql = 'SELECT * FROM posts WHERE author = :author';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['author' => $author]);
	
	$posts = $statement -> fetchAll();		//	Has default valie ^
	
	//	var_dump($posts)
	foreach($posts as $post) {
		echo $post -> title . '<br>';
	}
	*/
	
	
	//	Fetch single post
	/*
	$sql = 'SELECT * FROM posts WHERE id = :id';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['id' => $id]);
	
	$post = $statement -> fetch();
	
	echo $post -> body;
	*/
	
	
	//	Get row count
	/*
	$statement = $connection -> prepare('SELECT * FROM posts WHERE author = ?');
	$statement -> execute([$author]);
	$postCount = $statement -> rowCount();
	
	echo $postCount;
	*/
	
	$id = 2;
	$title = 'Post 6';
	$body = 'This is post 6';
	$author = 'Maciek';
	$limit = 1;
	
	/*
	$sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['title' => $title, 'body' => $body, 'author' => $author]);
	*/
	/*
	$sql = 'UPDATE posts SET author = :author WHERE id = :id';
	$statement = $connection -> prepare($sql);
	$statement -> execute(['id' => $id]);
	*/
	
	//	Search
	/*
	$search = "%post%";
	$sql = 'SELECT * FROM posts WHERE title LIKE ?';
	$statement = $connection -> prepare($sql);
	$statement -> execute([$search]);
	$posts = $statement -> fetchAll();
	
	foreach($posts as $post) {
		echo $post -> title . '<br>';
	}
	*/
	
	
	$sql = 'SELECT * FROM posts WHERE author = ? LIMIT ?';
	$statement = $connection -> prepare($sql);
	$statement -> execute([$author, $limit]);
	$post = $statement -> fetchAll();
	
	//echo $post -> title;