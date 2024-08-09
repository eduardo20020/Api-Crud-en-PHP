<?php
// Definir el array de datos
$data = [
    [
        "nombre" => "Introducción a la Presupuestación de Proyectos",
        "subtemas" => [
            "Conceptos Básicos de Presupuestación",
            "Importancia de la Presupuestación",
            "Tipos de Presupuestos",
            "Factores que Afectan el Presupuesto de un Proyecto"
        ]
    ],
    [
        "nombre" => "Componentes del Presupuesto de un Proyecto",
        "subtemas" => [
            "Desglose Estructurado del Presupuesto",
            "Identificación de Costos Directos e Indirectos",
            "Métodos para Estimar Costos",
            "Herramientas de Software para la Presupuestación"
        ]
    ],
    [
        "nombre" => "Gestión Financiera del Proyecto",
        "subtemas" => [
            "Control de Costos y Desviaciones Presupuestarias",
            "Técnicas de Seguimiento y Control Financiero",
            "Análisis de la Viabilidad Financiera de un Proyecto",
            "Estrategias para la Gestión de Riesgos Financieros"
        ]
    ],
    [
        "nombre" => "Evaluación y Cierre Financiero de Proyectos",
        "subtemas" => [
            "Evaluación del Rendimiento Financiero del Proyecto",
            "Métodos para la Evaluación del Valor Ganado (EVM)",
            "Preparación de Informes Financieros de Cierre de Proyecto",
            "Lecciones Aprendidas y Retroalimentación para Futuros Proyectos"
        ]
    ]
];

// Establecer el tipo de contenido a JSON
header('Content-Type: application/json');

// Enviar la respuesta JSON
echo json_encode($data);
?>
