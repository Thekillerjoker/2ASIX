<?php
// Comprovar que les dades s'han enviat amb el post
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Accés no vàlid. Torna al formulari.");
}
// Recollir les dades en dues una per les files i l'altre per les columnes.
$files = $_POST["files"] ?? null;
$columnes = $_POST["columnes"] ?? null;

if ($files === null || $columnes === null ||
    $files === "" || $columnes === "") {
    exit("Error: cal omplir els dos camps.");
}

if (
    filter_var($files, FILTER_VALIDATE_INT) === false ||
    filter_var($columnes, FILTER_VALIDATE_INT) === false
) {
    exit("Error: les files i les columnes han de ser nombres enters.");
}

// Convertirles a enters.
$files = (int) $files;
$columnes = (int) $columnes;

if ($files <= 0 || $columnes <= 0) {
    exit("Error: els dos valors han de ser majors que zero.");
}
// Indicar el limit maxim de files i columnes
if ($files > 100 || $columnes > 100) {
    exit("Error: el màxim és de 100 files i 100 columnes.");
}
// amb la variable Mida podem definir les dimensions dels cercles
$mida = 40;
$amplada = $columnes * $mida; # En aquest cas l'amplada sera el numero de columnes multiplicat per la mida és ha dir 40.
$alcada = $files * $mida; # I en aquest cas l'alçada sera el numero de files multiplicat per la mida és ha dir 40.

?>

<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Resultat SVG</title>
</head>
<body>
	<h1>Quadrat de cercles</h1>
	<p>Nombre de files: <?= $files ?></p>
	<p>Nombre de columnes: <?= $columnes ?></p>
	
	<svg xmlns="http://www.w3.org/2000/svg"
	     width="<?= $amplada ?>"
	     height="<?= $alcada ?>"
	     viewBox="0 0 <?= $amplada ?> <?= $alcada ?>">
	     <?php
		// Bucle per generar les files, i el seguent bucle es per generar les files.
		for ($i = 0; $i < $files; $i++) {
		    
		    for ($j = 0; $j < $columnes; $j++) {

			 $x = $j * $mida + $mida / 2;
			 $y = $i * $mida + $mida / 2;
			 ?>
			<circle
			   cx="<?= $x ?>"
			   cy="<?= $y ?>"
			   r="14"
			   fill="lightblue"
			   stroke="blue"
			   stroke-width="2" />
			<?php
		}
	}
        ?>

    </svg>
   
    <p>
	<a href="2_Svg-SR-DV.html">Tornar al formulari</a>
    </p>

</body>
</html>
