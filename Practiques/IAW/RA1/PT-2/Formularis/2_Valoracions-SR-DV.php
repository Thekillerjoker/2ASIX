
<?php
// Iniciar la sessio.
session_start();

// Inicialitzar el comptador de valoracions.
if (!isset($_SESSION["valoracions"])) {
    $_SESSION["valoracions"] = [
        "fluixa" => 0,
        "suficient" => 0,
        "be" => 0,
        "moltbe" => 0
    ];
}

// Comprovar si s'ha enviat el formulari.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valoracio = $_POST["valoracio"] ?? "";

    // Validar que sigui una opcio correcta.
    if (!is_string($valoracio) ||
        !array_key_exists($valoracio, $_SESSION["valoracions"])) {
        exit("Error: has de seleccionar una valoracio valida.");
    }

    $_SESSION["valoracions"][$valoracio]++;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultats de les valoracions</title>
</head>
<body>

    <h1>Resultats de les valoracions</h1>

    <h2>Nombre de vegades que s'ha escollit cada opcio:</h2>

    <ul>
        <li>Fluixa: <?= $_SESSION["valoracions"]["fluixa"] ?> cops</li>

        <li>Suficient: <?= $_SESSION["valoracions"]["suficient"] ?> cops</li>

        <li>Bé: <?= $_SESSION["valoracions"]["be"] ?> cops</li>

        <li>Molt bé: <?= $_SESSION["valoracions"]["moltbe"] ?> cops</li>
    </ul>

    <p>
        <a href="2_Valoracions-SR-DV.html">
            Tornar a votar
        </a>
    </p>

</body>
</html>
