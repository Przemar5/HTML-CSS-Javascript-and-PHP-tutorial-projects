<?php
	
	class Book {
		private $title;
		private $author;
		private $pages;
		
		function __construct($title, $author, $pages) {
			$this -> title = $title;
			$this -> author = $author;
			$this -> pages = $pages;
			
			echo 'New book created<br>';
		}
		
		function wypisz() {
			echo "Hello world!";
		}
		
		function getTitle() {
			return $this -> title;
		}
		
		function getAuthor() {
			return $this -> author;
		}
		
		function getPages() {
			return $this -> pages;
		}
		
		function setTitle($title) {
			$this -> title = $title;
		}
		
		function setAuthor($author) {
			$this -> author = $author;
		}
		
		function setPages($pages) {
			$this -> pages = $pages;
		}
	}
	
	class Action_book extends Book {
		
	}
	
	$book1 = new Book(	"1000 pozycji kamasutry",
						"Kolektyw domu medytacji w Warszawie",
						1457);
	
	$book1 -> wypisz();
?>