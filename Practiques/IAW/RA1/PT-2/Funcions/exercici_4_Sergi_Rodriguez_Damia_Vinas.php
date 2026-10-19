<?php
$cotxes = [
    [
        "Marca" => "Renault",
        "Model" => "Megane",
        "Any" => 2021,
        "Versions" => [
            "Zen Tce 103kW (1040cv) GPF-SS",
            "Zen E-TECH Híbrid endollable 117kW (160CV)-SS",
            "RS Line TCe 103kW (140CV) GPF-SS"
        ]
    ],
    [
        "Marca" => "Seat",
        "Model" => "Leon",
        "Any" => 2020,
        "Versions" => [
            "Style 1.5 TSI 96kW",
            "FR 2.0 TDI 110kW"


        ]
    ],
    [
        "Marca" => "Toyota",
        "Model" => "Corolla",
        "Any" => 2022,
        "Versions" => [
            "Active 1.8 Hybrid",
            "GR Sport 2.0 Hybrid"
        ]
    ]
];

function modelsDeLaMarcaSR($cotxes, $marca)
{
    $trobats = [];

    foreach ($cotxes as $cotxe) {
        if (strtolower($cotxe["Marca"]) == strtolower($marca)) {
            $trobats[] = $cotxe["Model"];
        }
    }

    if (empty($trobats)) {
        echo "No s'ha trobat cap mopdel de la marca $marca. <br>";
    } else {
        echo "Models de la marca $marca:<br>";
        echo "<ul>";
        foreach ($trobats as $model) {
            echo "<li>$model</li>";
        }
        echo "</ul>";
    }
}

function afegirCotxeSR(&$cotxes, $marca, $model, $any, $versions)
{
    foreach ($cotxes as $cotxe) {
        if (strtolower($cotxe["Model"]) == strtolower($model)) {
            echo "El cotxe '$model' ja existeix. No s'ha afegit.<br>";
            return;
        }
    }
    $cotxes[] = [
        "Marca" => $marca,
        "Model" => $model,
        "Any" => $any,
        "Versions" => $versions
    ];
    echo "Cotxe '$model' afegit correctament.<br>";
}

function eliminarCotxeSR(&$cotxes, $model)
{
    foreach ($cotxes as $index => $cotxe) {
        if (strtolower($cotxe["Model"]) == strtolower($model)) {
            unset($cotxes[$index]);
            echo "Cotxe '$model' eliminat correcatament. <br>";
            return;
        }
    }
    echo "No s'ha trobat cap cotcxe amb el model '$model'.<br>";
}
function modificarCotxeSR(&$cotxes, $model, $nouAny = null, $novesVersions = null)
{
    foreach ($cotxes as &$cotxe) {
        if (strtolowe($cotxe["Model"]) == strtolower($model)) {
            echo "Cotxe trobat: $model<br>";
            echo "Any actual: " . $cotxe["Any"] . "<br>";
            echo "Versions actuals: <br><ul>";
            foreach ($cotxe["Versions"] as $v)
                echo "<li>$v</li>";
            echo "</ul>";

            if ($nouAny !== null) {
                $cotxe["Any"] = $nouAny;
                echo "Any modificat a $nouAny<br>";
            }

            if ($novesVersions !== null) {
                $cotxe["Versions"] = $novesVersions;
                echo "Versions modificades correctament<br>";
            }

            return;
        }
    }
    echo "No existeix cap cotxe amb el model '$model'. <br>";
}
echo "<h2>Models de la marca Toyota</h2>";
modelsDeLaMarcaSR($cotxes, "Toyota");

echo "<h2> Afegir cotxe</h2>";
afegirCotxeSR($cotxes, "Honda", "Civic", 2023, ["Sport", "Elegance"]);

echo "<h2>Eliminar cotxe</h2>";
eliminarCotxeSR($cotxes, "Leon");

echo "<h2>Modificar cotxe</h2>";
modificarCotxeSR($cotxes, "Megane", 2024, ["GT Line", "RS Trophy"]);
?>