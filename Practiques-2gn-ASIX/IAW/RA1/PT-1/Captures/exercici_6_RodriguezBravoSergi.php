<?php
$nom = "Sergi";
$cognom = "Rodríguez";
$wally = "on estarà Wally dins del text";
$text = $nom . " " . $cognom . " " . $wally;
$posicio = strpos($text, "Wally");
echo "Text: " . $text;
echo "<br>";
echo "La posició de Wally és: " . $posicio;
?>