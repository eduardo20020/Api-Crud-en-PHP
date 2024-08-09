<?php
header('Content-Type: application/json');

$data = [
    "Lecciones" => [
        [
            "Leccion" => "1",
            "Titulo" => "Introduccion a la Presupuestacion de Proyectos",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Conceptos Basicos de Presupuestacion",
                    "Concepto" => "El presupuesto es una herramienta esencial que estimula la planificacion financiera, permitiendo anticipar ingresos y gastos para un periodo determinado. En proyectos, su funcion principal es garantizar que los recursos se utilicen eficientemente para alcanzar los objetivos establecidos.",
                    "Ejemplo" => "Para un proyecto de desarrollo de software, un presupuesto incluye costos de desarrollo, licencias de software, salarios de programadores, y costos de infraestructura. Este presupuesto ayuda a evitar sobrecostos y asegura que todos los recursos necesarios esten disponibles en cada fase del proyecto.",
                    "Video" => "Introduccion a la Presupuestacion"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Importancia de la Presupuestacion",
                    "Concepto" => "La presupuestacion actua como un marco financiero que guia la toma de decisiones durante todo el ciclo de vida del proyecto. Es crucial para prever costos, identificar riesgos financieros, y mantener al proyecto dentro de los limites establecidos.",
                    "Ejemplo" => "En la construccion de un puente, un presupuesto detallado permite planificar desde la compra de materiales hasta los salarios de los trabajadores. Sin esta planificacion, es probable que el proyecto enfrente sobrecostos y retrasos.",
                    "Video" => "Importancia del Presupuesto"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Tipos de Presupuestos",
                    "Concepto" => "Los presupuestos se dividen en varias categorias segun su proposito: Presupuesto Operativo, Presupuesto de Capital, Presupuesto de Caja.",
                    "Ejemplo" => "Un proyecto de TI puede tener un presupuesto operativo para los costos de desarrollo continuo, un presupuesto de capital para la compra de servidores, y un presupuesto de caja para asegurar que haya suficiente liquidez para pagos de proveedores.",
                    "Video" => "Tipos de Presupuestos"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Factores que Afectan el Presupuesto de un Proyecto",
                    "Concepto" => "Factores internos y externos como la inflacion, fluctuaciones del mercado, retrasos en la cadena de suministro, y cambios en los requisitos del proyecto pueden influir significativamente en el presupuesto.",
                    "Ejemplo" => "Si durante un proyecto de construccion los precios del acero suben inesperadamente, el presupuesto debe ajustarse para acomodar estos nuevos costos, posiblemente recortando en otras areas para evitar sobrepasar el presupuesto total.",
                    "Video" => "Factores que Afectan el Presupuesto"
                ]
            ]
        ],
        [
            "Leccion" => "2",
            "Titulo" => "Componentes del Presupuesto de un Proyecto",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Desglose Estructurado del Presupuesto",
                    "Concepto" => "El desglose estructurado del presupuesto implica dividir el proyecto en componentes mas pequenos, asignando costos a cada uno para una gestion mas eficiente.",
                    "Ejemplo" => "En un proyecto de construccion, los costos se dividen entre materiales, mano de obra, maquinaria, y servicios. Este desglose ayuda a identificar donde se pueden hacer ajustes si el presupuesto total esta en riesgo.",
                    "Video" => "Desglose del Presupuesto"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Identificacion de Costos Directos e Indirectos",
                    "Concepto" => "Los costos directos son aquellos que se pueden asignar especificamente a una actividad o componente del proyecto, mientras que los costos indirectos son generales y no pueden asignarse directamente.",
                    "Ejemplo" => "En una empresa de manufactura, los costos directos incluyen los materiales y la mano de obra necesaria para producir un bien, mientras que los costos indirectos pueden incluir el alquiler de la fabrica y los salarios del personal administrativo.",
                    "Video" => "Costos Directos e Indirectos"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Metodos para Estimar Costos",
                    "Concepto" => "Hay varios metodos para estimar costos en un proyecto, incluyendo estimaciones analogas (basadas en proyectos similares anteriores), parametricas (basadas en datos historicos), y por juicio de expertos.",
                    "Ejemplo" => "Para un nuevo proyecto de desarrollo de software, una estimacion analoga puede basarse en los costos de un proyecto similar realizado anteriormente, ajustado por las diferencias en alcance y complejidad.",
                    "Video" => "Metodos de Estimacion de Costos"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Herramientas de Software para la Presupuestacion",
                    "Concepto" => "Existen diversas herramientas de software que facilitan la creacion y gestion de presupuestos, permitiendo simulaciones de escenarios, seguimiento de costos, y analisis de desviaciones.",
                    "Ejemplo" => "Herramientas como Microsoft Project, SAP, y Primavera permiten a los gerentes de proyectos crear presupuestos detallados, hacer seguimiento en tiempo real, y generar informes financieros.",
                    "Video" => "Software para Presupuestacion"
                ]
            ]
        ],
        [
            "Leccion" => "3",
            "Titulo" => "Gestion Financiera del Proyecto",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Control de Costos y Desviaciones Presupuestarias",
                    "Concepto" => "El control de costos implica monitorear los gastos reales contra el presupuesto, identificando y corrigiendo desviaciones para mantener el proyecto en linea con el presupuesto original.",
                    "Ejemplo" => "Si un proyecto de marketing comienza a superar su presupuesto debido a gastos publicitarios imprevistos, el gerente de proyecto debe identificar estas desviaciones rapidamente y ajustar otras areas del presupuesto para evitar sobrecostos.",
                    "Video" => "Control de Costos"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Tecnicas de Seguimiento y Control Financiero",
                    "Concepto" => "Existen tecnicas como el analisis del valor ganado (EVM) y el analisis de variaciones que ayudan a los gerentes de proyectos a realizar un seguimiento eficaz del desempeno financiero, comparando el trabajo planificado con el realizado y los costos asociados.",
                    "Ejemplo" => "En un proyecto de construccion, el EVM puede mostrar que el proyecto esta avanzando mas rapido de lo previsto pero a un costo mayor, lo que permite a los gerentes hacer ajustes antes de que se agoten los fondos.",
                    "Video" => "Tecnicas de Seguimiento Financiero"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Analisis de la Viabilidad Financiera de un Proyecto",
                    "Concepto" => "Antes de iniciar un proyecto, se realiza un analisis de viabilidad financiera para determinar si los beneficios esperados justifican la inversion necesaria. Esto incluye el calculo de metricas como el retorno de inversion (ROI), el valor presente neto (VPN), y la tasa interna de retorno (TIR).",
                    "Ejemplo" => "Una empresa evalua la viabilidad de un proyecto de expansion internacional calculando el ROI esperado y comparandolo con el costo de capital. Si el ROI es significativamente mayor que el costo de capital, el proyecto se considera viable.",
                    "Video" => "Analisis de Viabilidad Financiera"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Estrategias para la Gestion de Riesgos Financieros",
                    "Concepto" => "La gestion de riesgos financieros implica identificar, analizar, y mitigar los riesgos que podrian afectar el presupuesto del proyecto. Esto incluye estrategias como la diversificacion, la cobertura (hedging), y la creacion de reservas de contingencia.",
                    "Ejemplo" => "En un proyecto de construccion, para mitigar el riesgo de aumento en los precios de los materiales, se puede establecer un contrato de precio fijo con los proveedores o incluir una reserva en el presupuesto para cubrir posibles aumentos de costos.",
                    "Video" => "Gestion de Riesgos Financieros"
                ]
            ]
        ],
        [
            "Leccion" => "4",
            "Titulo" => "Evaluacion y Cierre Financiero de Proyectos",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Evaluacion del Rendimiento Financiero del Proyecto",
                    "Concepto" => "Al finalizar un proyecto, se realiza una evaluacion del rendimiento financiero para determinar si se cumplieron los objetivos presupuestarios y financieros. Esto implica comparar los costos reales con los presupuestados y evaluar la eficiencia en el uso de los recursos.",
                    "Ejemplo" => "En un proyecto de desarrollo de software, la evaluacion financiera puede revelar que se gasto menos de lo presupuestado en mano de obra pero mas en licencias de software. Este analisis ayudara a planificar mejor futuros proyectos.",
                    "Video" => "Evaluacion del Rendimiento Financiero"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Cierre Financiero del Proyecto",
                    "Concepto" => "El cierre financiero incluye la liquidacion de todos los costos, la entrega de informes financieros finales, y la devolucion de fondos no utilizados. Es un paso critico para asegurar la transparencia y la rendicion de cuentas en la gestion de proyectos.",
                    "Ejemplo" => "En un proyecto de infraestructura, el cierre financiero implica asegurar que todos los proveedores hayan sido pagados, los contratos cerrados, y que cualquier sobrante en el presupuesto se reembolse a las partes interesadas.",
                    "Video" => "Cierre Financiero"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Documentacion y Lecciones Aprendidas",
                    "Concepto" => "Documentar las lecciones aprendidas durante el proyecto, incluyendo los exitos y fracasos financieros, es esencial para mejorar la planificacion y la ejecucion de futuros proyectos.",
                    "Ejemplo" => "Un proyecto de desarrollo de software puede concluir con un informe que detalle los motivos por los cuales se excedio el presupuesto en ciertas areas, proporcionando recomendaciones para evitar problemas similares en el futuro.",
                    "Video" => "Documentacion y Lecciones Aprendidas"
                ]
            ]
        ]
    ]
];

echo json_encode($data);
?>
