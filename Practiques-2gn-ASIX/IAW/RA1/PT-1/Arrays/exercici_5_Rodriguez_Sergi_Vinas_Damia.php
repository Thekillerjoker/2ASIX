<?php
$categories = ["Ecoleta", "Benjamí", "Aleví", "Infantil", "Juvenil"];

#Menú per escollir:
echo "<h2>Com vols generar la matriu?</h2>";
echo "1 - Sintaxi basada exclusivament en índex [] <br>";
echo "2 - Sintaxi basada en array() aniuat<br>";
echo "3 - Sintaxi combinada (array() + índexs)<br>";

$opcio = isset($_GET["opcio"]) ? $_GET["opcio"] : null;

if (!$opcio) {
    echo "<a href='?opcio=1'>Generar amb índex []</a><br>";
    echo "<a href='?opcio=2'>Generar amb array() aniuat</a><br>";
    echo "<a href='?opcio=3'>Generar amb sintaxi combinada</a>";
    exit;
}
# Generació opcio 1
if ($opcio == 1) {
    $jugadors = [];

    $jugadors[0][0] = "Grup A";
    $jugadors[0][1] = 21;
    $jugadors[0][2] = 30;
    $jugadors[0][3] = 20;
    $jugadors[0][4] = 25;
    $jugadors[0][5] = 19;

    $jugadors[1][0] = "Grup B";
    $jugadors[1][1] = 19;
    $jugadors[1][2] = 30;
    $jugadors[1][3] = 10;
    $jugadors[1][4] = 24;
    $jugadors[1][5] = 17;

    $jugadors[2][0] = "Grup C";
    $jugadors[2][1] = 15;
    $jugadors[2][2] = 28;
    $jugadors[2][3] = 8;
    $jugadors[2][4] = 20;
    $jugadors[2][5] = 14;
}

# Generació opció 2:
if ($opcio == 2) {
    $jugadors = array(
        array("Grup A", 21, 30, 20, 25, 19),
        array("Grup B", 19, 30, 10, 24, 17),
        array("Grup C", 15, 28, 8, 20, 14)
    );
}

# Generació opció 3:
if ($opcio == 3) {
    $jugadors = array();
    $jugadors[] = array("Grup A", 21, 30, 20, 25, 19);
    $jugadors[] = array("Grup B", 19, 30, 10, 24, 17);
    $jugadors[] = array("Grup C", 15, 28, 8, 20, 14);
}
# Mostrar l' informació
echo "<h2>Resultat:</h2>";
foreach ($jugadors as $fila) {
    echo "<h3>" . $fila[0] . "</h3>";
    echo "<ul>";
    for ($i = 1; $i < count($fila); $i++) {
        echo "<li>" . $categories[$i - 1] . ": " . $fila[$i] . " jugadors</li>";
    }
    echo "</ul>";
}
?>