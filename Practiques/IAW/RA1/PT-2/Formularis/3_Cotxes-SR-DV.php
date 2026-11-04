<?php
// Funcio per crear l'estructura d'un cotxe aquesta funcio la cridadrem al final de tot.
function crearCotxe(string $marca, string $model, int $any, array $versions): array
{
    return [
        "marca" => $marca,
        "model" => $model,
        "any" => $any,
        "versions" => $versions
    ];
}

// mostrar les dades del cotxe.
function mostrarCotxe(array $cotxe): void
{
    echo "<h2>" . htmlspecialchars($cotxe["marca"], ENT_QUOTES, "UTF-8")
        . " " . htmlspecialchars($cotxe["model"], ENT_QUOTES, "UTF-8")
        . "</h2>";

    echo "<p><strong>Marca:</strong> "
        . htmlspecialchars($cotxe["marca"], ENT_QUOTES, "UTF-8")
        . "</p>";

    echo "<p><strong>Model:</strong> "
        . htmlspecialchars($cotxe["model"], ENT_QUOTES, "UTF-8")
        . "</p>";

    echo "<p><strong>Any:</strong> "
        . $cotxe["any"] . "</p>";

    echo "<p><strong>Versions:</strong></p>";
    echo "<ul>";

    foreach ($cotxe["versions"] as $versio) {
        echo "<li>" . htmlspecialchars($versio, ENT_QUOTES, "UTF-8")
            . "</li>";
    }

    echo "</ul>";
}

// Comprovar que el formulari s'ha enviat.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Acces no valid. Torna al formulari.");
}

// Recollir les dades.
$marca = trim($_POST["marca"] ?? "");
$model = trim($_POST["model"] ?? "");
$any = $_POST["any"] ?? "";
$versions = $_POST["versions"] ?? [];

// Validar marca i model.
if ($marca === "" || $model === "") {
    exit("Error: la marca i el model son obligatoris.");
}

// l'any.
if (filter_var($any, FILTER_VALIDATE_INT) === false ||
    (int)$any < 1886) {
    exit("Error: introdueix un any valid (1886 o posterior).");
}

// que versions sigui un array.
if (!is_array($versions)) {
    exit("Error: les versions no tenen un format valid.");
}

// Eliminar versions buides i espais sobrants.
$versions = array_filter($versions, function ($versio) {
    return is_string($versio) && trim($versio) !== "";
});

$versions = array_map("trim", $versions);

// Crear l'estructura del cotxe és ha dir cridar la funció CrearCotxe i guardarla en la variable cotxe.
$cotxe = crearCotxe($marca, $model, (int)$any, array_values($versions));

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resultat del cotxe</title>
</head>
<body>

    <h1>Cotxe afegit correctament</h1>

    <?php mostrarCotxe($cotxe); ?>

    <p>
        <a href="3_Cotxes-SR-DV.html">Tornar al formulari</a>
    </p>

</body>
</html>

