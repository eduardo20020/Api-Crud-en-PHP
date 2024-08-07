<?php
// Definir el arreglo de datos
$data = [
    "num" => 4,
    "secciones" => [
        [
            "nombre" => "seccion1",
            "subtemas" => [
                ["subtema" => "subtema1", "contenido" => "Contenido del subtema 1 de la seccion 1"],
                ["subtema" => "subtema2", "contenido" => "Contenido del subtema 2 de la seccion 1"],
                ["subtema" => "subtema3", "contenido" => "Contenido del subtema 3 de la seccion 1"],
                ["subtema" => "subtema4", "contenido" => "Contenido del subtema 4 de la seccion 1"]
            ]
        ],
        [
            "nombre" => "seccion2",
            "subtemas" => [
                ["subtema" => "subtema1", "contenido" => "Contenido del subtema 1 de la seccion 2"],
                ["subtema" => "subtema2", "contenido" => "Contenido del subtema 2 de la seccion 2"],
                ["subtema" => "subtema3", "contenido" => "Contenido del subtema 3 de la seccion 2"],
                ["subtema" => "subtema4", "contenido" => "Contenido del subtema 4 de la seccion 2"]
            ]
        ],
        [
            "nombre" => "seccion3",
            "subtemas" => [
                ["subtema" => "subtema1", "contenido" => "Contenido del subtema 1 de la seccion 3"],
                ["subtema" => "subtema2", "contenido" => "Contenido del subtema 2 de la seccion 3"],
                ["subtema" => "subtema3", "contenido" => "Contenido del subtema 3 de la seccion 3"],
                ["subtema" => "subtema4", "contenido" => "Contenido del subtema 4 de la seccion 3"]
            ]
        ],
        [
            "nombre" => "seccion4",
            "subtemas" => [
                ["subtema" => "subtema1", "contenido" => "Contenido del subtema 1 de la seccion 4"],
                ["subtema" => "subtema2", "contenido" => "Contenido del subtema 2 de la seccion 4"],
                ["subtema" => "subtema3", "contenido" => "Contenido del subtema 3 de la seccion 4"],
                ["subtema" => "subtema4", "contenido" => "Contenido del subtema 4 de la seccion 4"]
            ]
        ]
    ]
];

// Configurar el encabezado Content-Type a JSON
header('Content-Type: application/json');

// Convertir el arreglo a JSON y enviarlo como respuesta
echo json_encode($data);
?>
