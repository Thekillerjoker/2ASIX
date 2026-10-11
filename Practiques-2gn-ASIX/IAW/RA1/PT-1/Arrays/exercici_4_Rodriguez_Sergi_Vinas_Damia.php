<?php
$cotxes = [
    [
        "Marca" => "Renault",
        "Model" => "Megane",
        "Any" => 2021,
        "Versions" => [
            "Zen Tce 103kW (140CV) GPF-SS",
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
            "Style 2.0 Hybrid",
            "GR Sport 1.8 Hybrid",
            "GR Sport 2.0 Hybrid"
        ]
    ]
];

foreach ($cotxes as $cotxe) {
    echo "<h3>" . $cotxe["Marca"] . " " . $cotxe["Model"] . " (" . $cotxe["Any"] . ")</h3>";
    echo "<ul>";
    foreach ($cotxe["Versions"] as $versio) {
        echo "<li>" . $versio . "</li>";
    }
    echo "</ul>";
}
?>