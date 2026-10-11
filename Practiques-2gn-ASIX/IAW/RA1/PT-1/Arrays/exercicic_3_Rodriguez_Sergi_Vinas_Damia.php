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
?>