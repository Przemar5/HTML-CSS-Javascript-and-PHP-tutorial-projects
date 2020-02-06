<?php
	
	interface Singable
	{
		public function sing();
	}
	
	class Animal implements Singable
	{
		protected $name;
		protected $sex;
		protected $sound;
		
		public function makeSound() {
			echo "Grrr...";
		}
		
		public function __get($name) {
			return $this -> $name;
		}
		
		function sing() {
			echo 'Auuuuu!';
		}
	}
	
	class Dog extends Animal
	{
		public function makeSound() {
			echo 'Hau! Hau!';
		}
		
		function sing() {
			echo 'EEEEE!';
		}
	}
	
	function makeSing(Singable $obj) {
		$obj -> sing();
	}
	
	$dog = new Dog;
	makeSing($dog);
	
?>