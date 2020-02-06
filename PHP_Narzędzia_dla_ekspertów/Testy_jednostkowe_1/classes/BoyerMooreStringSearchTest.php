<?php
	
	require_once('C:\PHP_unit_testing\bin');
	
	require_once(__DIR__ . '../interfaces/StringSearchable.php');
	require_once(__DIR__ . '../classes/BoyerMooreStringSearch.php');
	
	
	class BoyerMooreStringSearchTest extends PHPUnit_Framework_TestCase
	{
		public function testNumberOfMatches() {
			$poem = <<<POEM
Na tapczanie siedzi leń,
nic nie robi cały dzień.

"O, wypraszam to sobie!
Jak to? Ja nic nie robię?
A kto siedzi na tapczanie?
A kto zjadł pierwsze śniadanie?
A kto dzisiaj pluł i łapał?
A kto się po głowie podrapał?
A kto dziś zgubił kalosze?
O - o! Proszę!"
POEM;
			$bm = new BoyerMooreStringSearch();
			
			$bm -> search('kto', $poem);
			
			$this -> assertEquals(8, $bm -> getResultCount(), 
									'Algorytm nie znalazł prawidłowej liczby wystąpień ciągu.');
			
		}
	}
	
?>