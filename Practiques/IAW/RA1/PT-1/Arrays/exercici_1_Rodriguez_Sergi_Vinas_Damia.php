<?php
$data_naixement = new DateTime("2004-04-15");
$data_actual = new DateTime();
$diff = $data_actual->diff($data_naixement);

$dies = $diff->days;
$hores_totals = $dies * 24 + $diff->h;
$minuts_totals = $hores_totals * 60 + $diff->i;
$segons_totals = $minuts_totals * 60 + $diff->s;

echo "Han passat " . $segons_totals . " segons des del teu naixement.<br>";
echo "Han passat " . $minuts_totals . " minuts des del teu naixement.<br>";
echo "Han passat " . $hores_totals . " hores des del teu naixement.<br>";
?>