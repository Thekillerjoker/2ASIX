<?php
$a = 15;
$b = intdiv($a, 2);
$c = round($a * 0.5);
echo "La suma de $a, $b i $c és: " . ($a + $b + $c);
echo "<br>";
echo "El valor més petit entre $a, $b i $c és: " . min($a, $b, $c);
echo "<br>";
echo "El valor més gran entre $a, $b i $c és: " . max($a, $b, $c);
echo "<br>";
echo "La mitjana entre els tres és: " . ($a + $b + $c) / 3;
?>