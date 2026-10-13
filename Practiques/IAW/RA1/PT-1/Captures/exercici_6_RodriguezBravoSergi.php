<?php
$valor = rand(0, 3);
echo "El valor obtingut és: " . $valor;
echo "<br>";
if ($valor == 0) {
    echo '<svg width="100" height="100">
		<circle cx="50" cy="50" r="40" stroke="black" stroke-width="2" fill="none"/>
	      </svg>';
}
if ($valor == 3) {
    echo '<svg width="100" height="100">
		<polygon points="50,10 90,90 10,90" stroke="black" stroke-width="2" fill="none"/>
	      </svg>';
}
?>