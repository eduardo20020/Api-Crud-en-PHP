<?php
// Definir el array de datos
$data = [
    [
        "nombre" => "seccion1",
        "subtemas" => [
            "aqui va el contenido del subtema1 dxdxd lorem20",
            "aqui va el contenido del subtema1 dxdxd",
            "aqui va el contenido del subtema1 dxdxd",
            "aqui va el contenido del subtema1 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion2",
        "subtemas" => [
            "aqui va el contenido del subtema2 dxdxd",
            "aqui va el contenido del subtema2 dxdxd",
            "aqui va el contenido del subtema2 dxdxd",
            "aqui va el contenido del subtema2 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion3",
        "subtemas" => [
            "aqui va el contenido del subtema3 dxdxd",
            "aqui va el contenido del subtema3 dxdxd",
            "aqui va el contenido del subtema3 dxdxd",
            "aqui va el contenido del subtema3 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion4",
        "subtemas" => [
            "aqui va el contenido del subtema4 dxdxd",
            "aqui va el contenido del subtema4 dxdxd",
            "aqui va el contenido del subtema4 dxdxd",
            "aqui va el contenido del subtema4 dxdxd"
        ]
    ]
];

// Establecer el tipo de contenido a JSON
header('Content-Type: application/json');

// Enviar la respuesta JSON
echo json_encode($data);
?>
