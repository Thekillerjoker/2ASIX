<?php
$mesures_while = [];
$mesures_for = [];

$i = 0;
while ($i < 10) {
    $inici = microtime(true);
    $j = 0;
    while ($j < 225) {
        $k = $j * $j;
        $j++;
    }
    $final = microtime(true);

    $mesures_while[] = ($final - $inici) * 1000000;
    $i++;
}
for ($i = 0; $i < 10; $i++) {
    $inici = microtime(true);
    for ($j = 0; $j < 255; $j++) {
        $k = $j * $j;
    }
    $final = microtime(true);
    $mesures_for[] = ($final - $inici) * 1000000;
}
echo "While:<br>";
echo "Valor mes petit: " . min($mesures_while) . "microsegons<br>";
echo "Valor mes gran: " . max($mesures_while) . "microsegons<br>";
echo "Mitjana: " . (array_sum($mesures_while) / 10) . "mictosegons<br>";

echo "For:<br>";
echo "Valor més petit: " . min($mesures_for) . "microsegons<br>";
echo "Valor més gran: " . max($mesures_for) . "microsegons<br>";
echo "Mitjana: " . (array_sum($mesures_for) / 10) . "microsegons<br>";
?>