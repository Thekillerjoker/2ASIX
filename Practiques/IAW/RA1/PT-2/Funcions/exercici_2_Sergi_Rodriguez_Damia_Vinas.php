<?php
function calcularValors($llista)
{

    $suma = 0;
    foreach ($llista as $valor) {
        $suma += $valor;
    }
    $mitjana = $suma / count($llista);

    $max = $llista[0];
    foreach ($llista as $valor) {
        if ($valor > $max) {
            $max = $valor;
        }
    }

    $min = $llista[0];
    foreach ($llista as $valor) {
        if ($valor < $min) {
            $min = $valor;
        }
    }

    return [
        "Mitjana" => $mitjana,
        "Valor més gran" => $max,
        "Valor més petiti" => $min
    ];
}

function analitzarMatrius($edat, $alcada, $pes)
{
    return [
        "Edat" => calcularValors($edat),
        "Alçada" => calcularValors($alcada),
        "Pes" => calcularValors($pes)
    ];
}
?>