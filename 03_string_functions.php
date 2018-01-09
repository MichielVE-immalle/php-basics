<?php

$zin = "Binnenkort is het weeral lente";

// Print af hoeveel woorden $zin bevat.
echo "<p>hoe veel woorden zitten er in de zin?</p>";
echo str_word_count($zin);
echo "<br>";

// Vervang in $zin "lente" door "zomer" en druk af.
$zin = str_replace('lente', 'zomer', $zin);
echo $zin;

?>
