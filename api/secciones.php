<?php
header('Content-Type: application/json');

$data = [
    "Lecciones" => [
        [
            "Lección" => "1",
            "Título" => "Introducción a la Presupuestación de Proyectos",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Título" => "Conceptos Básicos de Presupuestación",
                    "Concepto" => "El presupuesto es una herramienta esencial que estimula la planificación financiera, permitiendo anticipar ingresos y gastos para un período determinado. En proyectos, su función principal es garantizar que los recursos se utilicen eficientemente para alcanzar los objetivos establecidos.",
                    "Ejemplo" => "Para un proyecto de desarrollo de software, un presupuesto incluye costos de desarrollo, licencias de software, salarios de programadores, y costos de infraestructura. Este presupuesto ayuda a evitar sobrecostos y asegura que todos los recursos necesarios estén disponibles en cada fase del proyecto.",
                    "Video" => "Introducción a la Presupuestación"
                ],
                [
                    "Subtema" => "2",
                    "Título" => "Importancia de la Presupuestación",
                    "Concepto" => "La presupuestación actúa como un marco financiero que guía la toma de decisiones durante todo el ciclo de vida del proyecto. Es crucial para prever costos, identificar riesgos financieros, y mantener al proyecto dentro de los límites establecidos.",
                    "Ejemplo" => "En la construcción de un puente, un presupuesto detallado permite planificar desde la compra de materiales hasta los salarios de los trabajadores. Sin esta planificación, es probable que el proyecto enfrente sobrecostos y retrasos.",
                    "Video" => "Importancia del Presupuesto"
                ],
                [
                    "Subtema" => "3",
                    "Título" => "Tipos de Presupuestos",
                    "Concepto" => "Los presupuestos se dividen en varias categorías según su propósito: Presupuesto Operativo, Presupuesto de Capital, Presupuesto de Caja.",
                    "Ejemplo" => "Un proyecto de TI puede tener un presupuesto operativo para los costos de desarrollo continuo, un presupuesto de capital para la compra de servidores, y un presupuesto de caja para asegurar que haya suficiente liquidez para pagos de proveedores.",
                    "Video" => "Tipos de Presupuestos"
                ],
                [
                    "Subtema" => "4",
                    "Título" => "Factores que Afectan el Presupuesto de un Proyecto",
                    "Concepto" => "Factores internos y externos como la inflación, fluctuaciones del mercado, retrasos en la cadena de suministro, y cambios en los requisitos del proyecto pueden influir significativamente en el presupuesto.",
                    "Ejemplo" => "Si durante un proyecto de construcción los precios del acero suben inesperadamente, el presupuesto debe ajustarse para acomodar estos nuevos costos, posiblemente recortando en otras áreas para evitar sobrepasar el presupuesto total.",
                    "Video" => "Factores que Afectan el Presupuesto"
                ]
            ]
        ],
        [
            "Lección" => "2",
            "Título" => "Componentes del Presupuesto de un Proyecto",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Título" => "Desglose Estructurado del Presupuesto",
                    "Concepto" => "El desglose estructurado del presupuesto implica dividir el proyecto en componentes más pequeños, asignando costos a cada uno para una gestión más eficiente.",
                    "Ejemplo" => "En un proyecto de construcción, los costos se dividen entre materiales, mano de obra, maquinaria, y servicios. Este desglose ayuda a identificar dónde se pueden hacer ajustes si el presupuesto total está en riesgo.",
                    "Video" => "Desglose del Presupuesto"
                ],
                [
                    "Subtema" => "2",
                    "Título" => "Identificación de Costos Directos e Indirectos",
                    "Concepto" => "Los costos directos son aquellos que se pueden asignar específicamente a una actividad o componente del proyecto, mientras que los costos indirectos son generales y no pueden asignarse directamente.",
                    "Ejemplo" => "En una empresa de manufactura, los costos directos incluyen los materiales y la mano de obra necesaria para producir un bien, mientras que los costos indirectos pueden incluir el alquiler de la fábrica y los salarios del personal administrativo.",
                    "Video" => "Costos Directos e Indirectos"
                ],
                [
                    "Subtema" => "3",
                    "Título" => "Métodos para Estimar Costos",
                    "Concepto" => "Hay varios métodos para estimar costos en un proyecto, incluyendo estimaciones análogas (basadas en proyectos similares anteriores), paramétricas (basadas en datos históricos), y por juicio de expertos.",
                    "Ejemplo" => "Para un nuevo proyecto de desarrollo de software, una estimación análoga puede basarse en los costos de un proyecto similar realizado anteriormente, ajustado por las diferencias en alcance y complejidad.",
                    "Video" => "Métodos de Estimación de Costos"
                ],
                [
                    "Subtema" => "4",
                    "Título" => "Herramientas de Software para la Presupuestación",
                    "Concepto" => "Existen diversas herramientas de software que facilitan la creación y gestión de presupuestos, permitiendo simulaciones de escenarios, seguimiento de costos, y análisis de desviaciones.",
                    "Ejemplo" => "Herramientas como Microsoft Project, SAP, y Primavera permiten a los gerentes de proyectos crear presupuestos detallados, hacer seguimiento en tiempo real, y generar informes financieros.",
                    "Video" => "Software para Presupuestación"
                ]
            ]
        ],
        [
            "Lección" => "3",
            "Título" => "Gestión Financiera del Proyecto",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Título" => "Control de Costos y Desviaciones Presupuestarias",
                    "Concepto" => "El control de costos implica monitorear los gastos reales contra el presupuesto, identificando y corrigiendo desviaciones para mantener el proyecto en línea con el presupuesto original.",
                    "Ejemplo" => "Si un proyecto de marketing comienza a superar su presupuesto debido a gastos publicitarios imprevistos, el gerente de proyecto debe identificar estas desviaciones rápidamente y ajustar otras áreas del presupuesto para evitar sobrecostos.",
                    "Video" => "Control de Costos"
                ],
                [
                    "Subtema" => "2",
                    "Título" => "Técnicas de Seguimiento y Control Financiero",
                    "Concepto" => "Existen técnicas como el análisis del valor ganado (EVM) y el análisis de variaciones que ayudan a los gerentes de proyectos a realizar un seguimiento eficaz del desempeño financiero, comparando el trabajo planificado con el realizado y los costos asociados.",
                    "Ejemplo" => "En un proyecto de construcción, el EVM puede mostrar que el proyecto está avanzando más rápido de lo previsto pero a un costo mayor, lo que permite a los gerentes hacer ajustes antes de que se agoten los fondos.",
                    "Video" => "Técnicas de Seguimiento Financiero"
                ],
                [
                    "Subtema" => "3",
                    "Título" => "Análisis de la Viabilidad Financiera de un Proyecto",
                    "Concepto" => "Antes de iniciar un proyecto, se realiza un análisis de viabilidad financiera para determinar si los beneficios esperados justifican la inversión necesaria. Esto incluye el cálculo de métricas como el retorno de inversión (ROI), el valor presente neto (VPN), y la tasa interna de retorno (TIR).",
                    "Ejemplo" => "Una empresa evalúa la viabilidad de un proyecto de expansión internacional calculando el ROI esperado y comparándolo con el costo de capital. Si el ROI es significativamente mayor que el costo de capital, el proyecto se considera viable.",
                    "Video" => "Análisis de Viabilidad Financiera"
                ],
                [
                    "Subtema" => "4",
                    "Título" => "Estrategias para la Gestión de Riesgos Financieros",
                    "Concepto" => "La gestión de riesgos financieros implica identificar, analizar, y mitigar los riesgos que podrían afectar el presupuesto del proyecto. Esto incluye estrategias como la diversificación, la cobertura (hedging), y la creación de reservas de contingencia.",
                    "Ejemplo" => "En un proyecto de construcción, para mitigar el riesgo de aumento en los precios de los materiales, se puede establecer un contrato de precio fijo con los proveedores o incluir una reserva en el presupuesto para cubrir posibles aumentos de costos.",
                    "Video" => "Gestión de Riesgos Financieros"
                ]
            ]
        ],
        [
            "Lección" => "4",
            "Título" => "Evaluación y Cierre Financiero de Proyectos",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Título" => "Evaluación del Rendimiento Financiero del Proyecto",
                    "Concepto" => "Al finalizar un proyecto, se realiza una evaluación del rendimiento financiero para determinar si se cumplieron los objetivos presupuestarios y financieros. Esto implica comparar los costos reales con los presupuestados y evaluar la eficiencia en el uso de los recursos.",
                    "Ejemplo" => "En un proyecto de desarrollo de software, la evaluación financiera puede revelar que se gastó menos de lo presupuestado en mano de obra pero más en licencias de software. Este análisis ayudará a planificar mejor futuros proyectos.",
                    "Video" => "Evaluación del Rendimiento Financiero"
                ],
                [
                    "Subtema" => "2",
                    "Título" => "Métodos para la Evaluación del Valor Ganado (EVM)",
                    "Concepto" => "El análisis del valor ganado (EVM) es una técnica de gestión que permite medir el rendimiento del proyecto mediante la comparación del valor planificado, el valor ganado, y el costo real. Este método ayuda a determinar si el proyecto está dentro del presupuesto y si se está obteniendo el valor esperado por el dinero invertido.",
                    "Ejemplo" => "En un proyecto de construcción, el EVM podría mostrar que aunque se ha completado el 50% del trabajo, solo se ha gastado el 45% del presupuesto, lo que indica una eficiencia en el uso de los recursos.",
                    "Video" => "Valor Ganado (EVM)"
                ],
                [
                    "Subtema" => "3",
                    "Título" => "Preparación de Informes Financieros de Cierre de Proyecto",
                    "Concepto" => "Los informes financieros de cierre proporcionan un resumen completo de los costos reales frente a los presupuestados, analizan las desviaciones, y documentan las lecciones aprendidas. Estos informes son esenciales para la evaluación del proyecto y para la planificación de futuros proyectos.",
                    "Ejemplo" => "Un informe de cierre para un proyecto de TI podría incluir un análisis detallado de por qué ciertos costos superaron el presupuesto, así como recomendaciones para evitar tales sobrecostos en proyectos futuros.",
                    "Video" => "Informes Financieros de Cierre"
                ],
                [
                    "Subtema" => "4",
                    "Título" => "Lecciones Aprendidas y Retroalimentación para Futuros Proyectos",
                    "Concepto" => "La fase de cierre del proyecto incluye la recopilación de lecciones aprendidas, que ayudan a mejorar la gestión de futuros proyectos. Esto implica analizar lo que funcionó bien, lo que no, y cómo se pueden aplicar estas lecciones para evitar errores similares en el futuro.",
                    "Ejemplo" => "En un proyecto de marketing digital, se documenta que una campaña de publicidad pagada no generó el ROI esperado debido a una mala segmentación del público objetivo. Esta lección se utilizará para mejorar la segmentación en futuras campañas.",
                    "Video" => "Lecciones Aprendidas en Proyectos"
                ]
            ]
        ]
    ]
];

echo json_encode($data);
?>
