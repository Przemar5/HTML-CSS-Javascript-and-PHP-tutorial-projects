<?php
	
	class Search_String_BoyerMoore implements StringSearchable
	{
		public $substring = '';
		public $buffer = '';
		public $jumptable = array();
		protected $results = array();
		
		public function __construct() {
			
		}
		
		public function __destruct() {
			
		}
		
		public function search($substring, $buffer) {
			$this -> results = array();
			$this -> substring = $substring;
			$this -> buffer = $buffer;
			
			$this -> deriveJumpTable();
			
			$currentCharacter = strlen($this -> substring) - 1;
			$substringLength = strlen($this -> substring);
			$bufferLength = strlen($this -> buffer);
			
			while($currentCharacter < $bufferLength) {
				for($i = $substringLength - 1; $i >= 0; $i--) {
					if($this -> buffer{($currentCharacter - $substringLength + $i + 1)}
						== $this _> substring{$i}) {
						
						if($i == 0) {
							$this -> results[] = $currentCharacter - $substringLength;
							$currentCharacter += $this -> getJumpLength($this -> buffer{$currentCharacter});
							
						} else {
							continue;
						}
						
					} else {
						$currentCharacter += $this -> getJumpLength($this -> buffer{$currentCharacter});
						break;
					}
				}
			}
			
			return (sizeof($this -> results) > 0);
		}
		
		protected function deriveJumpTable() {
			return $this -> jumpTable;
		}
		
		public function getResults() {
			return $this -> results;
		}
		
		public function getResultsCount() {
			return sizeof($this -> results);
		}
		
		public function getJumpLength($character) {
			
			if(array_key_exists($character, $this -> jumpTable)) {
				return $this -> jumpTable[$character];
				
			} else {
				return strlen($this -> substring);
			}
		}
	}
	
?>