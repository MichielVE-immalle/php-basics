<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt


$value = str_split($woord, 1);

for ($x = 0; $x < strlen($woord); $x++){
	switch ($value[$x]) {
	    case "q":
		$punten += 10;
		break;
	    case "u":
		$punten += 4;
		break;
	    case "o":
		$punten += 1;
		break;
	    case "t":
		$punten += 2;
		break;
	    case "e":
		$punten += 1;
		break;
	    case "r":
		$punten += 2;
		break;
	    case "i":
		$punten += 1;
		break;
	    case "n":
		$punten += 1;
		break;
	}
}

echo "<p>Wanneer men scrabble speelt zou men voor het woord \"$woord\" $punten punten krijgen.</p>";

?>
