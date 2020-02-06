<?php
	
	include_once 'includes/config.php';
	include_once 'includes/db.php';
	
	
	$sql = "SELECT * FROM categories";
	$categories = $db -> query($sql);
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog CMS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
	<script src="jquery/jquery-3.4.1.min.js"></script>
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
	
  </head>
  
  
  <body>
    <div class="container">
	  

	  <div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">
			<a class="blog-nav-item" href="index.php">Home</a>
		 <?php
			
			if(($categories -> num_rows) > 0) {
				while($row = $categories -> fetch_assoc()) {
					echo '<a class="blog-nav-item" href="index.php?category=' . $row['id'] . '" id="category' . $row['id'] . '">' . $row['text'] . '</a>';
				}
			}
			
			
		 ?>
		</nav>
	  </div>
	  