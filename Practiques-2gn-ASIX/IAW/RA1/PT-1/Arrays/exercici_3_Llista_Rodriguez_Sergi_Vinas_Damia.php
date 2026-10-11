<?php
$mesos_del_any = [
    "Gener",
    "Febrer",
    "Març",
    "Abril",
    "Maig",
    "Juny",
    "Juliol",
    "Agost",
    "Setembre",
    "Octubre",
    "Novembre",
    "Desembre"
];

$llista_mesos = join(", ", $mesos_del_any);
echo "Els mesos de l'any són: " . $llista_mesos . "<br>";

sort($mesos_del_any);
echo "Els mesos de l'any ordenats alfabeticament són:<br>";
echo "<ul>";
foreach ($mesos_del_any as $mes) {
    echo "<li>" . $mes . "</li>";
}
echo "</ul>";
?>