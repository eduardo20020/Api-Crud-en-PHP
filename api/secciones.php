<?php
// Definir el array de datos
$data = [
    [
        "nombre" => "seccion1",
        "subtemas" => [
            "sub1" => "aqui va el contenido del subtema1 dxdxd lorem20",
            "sub2" => "aqui va el contenido del subtema1 dxdxd",
            "sub3" => "aqui va el contenido del subtema1 dxdxd",
            "sub4" => "aqui va el contenido del subtema1 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion2",
        "subtemas" => [
            "sub1" => "aqui va el contenido del subtema2 dxdxd",
            "sub2" => "aqui va el contenido del subtema2 dxdxd",
            "sub3" => "aqui va el contenido del subtema2 dxdxd",
            "sub4" => "aqui va el contenido del subtema2 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion3",
        "subtemas" => [
            "sub1" => "aqui va el contenido del subtema3 dxdxd",
            "sub2" => "aqui va el contenido del subtema3 dxdxd",
            "sub3" => "aqui va el contenido del subtema3 dxdxd",
            "sub4" => "aqui va el contenido del subtema3 dxdxd"
        ]
    ],
    [
        "nombre" => "seccion4",
        "subtemas" => [
            "sub1" => "aqui va el contenido del subtema4 dxdxd",
            "sub2" => "aqui va el contenido del subtema4 dxdxd",
            "sub3" => "aqui va el contenido del subtema4 dxdxd",
            "sub4" => "aqui va el contenido del subtema4 dxdxd"
        ]
    ]
];

// Establecer el tipo de contenido a JSON
header('Content-Type: application/json');

// Enviar la respuesta JSON
echo json_encode($data);
?>
