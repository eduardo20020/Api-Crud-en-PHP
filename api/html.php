<?php
header('Content-Type: application/json');

$data = [
    "Lecciones" => [
        [
            "Leccion" => "1",
            "Titulo" => "Introducción al HTML",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "¿Qué es HTML?",
                    "Concepto" => "HTML (HyperText Markup Language) es el lenguaje de marcado principal para crear y estructurar contenido en la web. Define la estructura de las páginas web mediante el uso de etiquetas y elementos.",
                    "Ejemplo" => "Un documento HTML básico incluye etiquetas como <html>, <head>, y <body>. Dentro del <body>, puedes incluir contenido como párrafos <p>, encabezados <h1>, y enlaces <a>.",
                    "Video" => "Introducción a HTML"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Estructura Básica de un Documento HTML",
                    "Concepto" => "Un documento HTML tiene una estructura básica que incluye la declaración del tipo de documento (<!DOCTYPE html>), y las etiquetas <html>, <head>, y <body>.",
                    "Ejemplo" => "html\n<!DOCTYPE html>\n<html>\n<head>\n<title>Mi Primera Página</title>\n</head>\n<body>\n<h1>Hola Mundo</h1>\n<p>Bienvenido a mi primera página web.</p>\n</body>\n</html>\n",
                    "Video" => "Estructura Básica de HTML"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Etiquetas y Atributos HTML",
                    "Concepto" => "Las etiquetas HTML se utilizan para definir elementos en una página web. Los atributos proporcionan información adicional sobre los elementos. Por ejemplo, el atributo src en una etiqueta <img> especifica la fuente de la imagen.",
                    "Ejemplo" => "html\n<img src='imagen.jpg' alt='Descripción de la imagen'>\n<a href='https://www.ejemplo.com'>Enlace a ejemplo.com</a>\n",
                    "Video" => "Etiquetas y Atributos HTML"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Elementos de Bloque y Elementos Inline",
                    "Concepto" => "Los elementos de bloque, como <div> y <p>, ocupan todo el ancho disponible y se presentan en una nueva línea. Los elementos inline, como <span> y <a>, solo ocupan el espacio necesario y se presentan en la misma línea.",
                    "Ejemplo" => "html\n<div>Este es un elemento de bloque.</div>\n<span>Este es un elemento inline.</span>\n",
                    "Video" => "Elementos de Bloque vs. Elementos Inline"
                ]
            ]
        ],
        [
            "Leccion" => "2",
            "Titulo" => "Estilos y Diseño en HTML",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Introducción a CSS",
                    "Concepto" => "CSS (Cascading Style Sheets) se utiliza para aplicar estilos a los documentos HTML. Permite modificar la apariencia del texto, los colores, y el diseño de la página.",
                    "Ejemplo" => "html\n<style>\nbody {\n  background-color: #f0f0f0;\n}\nh1 {\n  color: blue;\n}\n</style>\n",
                    "Video" => "Introducción a CSS"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Seleccionadores CSS",
                    "Concepto" => "Los seleccionadores CSS se utilizan para aplicar estilos a elementos HTML específicos. Los más comunes incluyen el seleccionador de tipo, de clase, y de ID.",
                    "Ejemplo" => "html\n<style>\n.pagina {\n  font-family: Arial, sans-serif;\n}\n#titulo {\n  text-align: center;\n}\n</style>\n",
                    "Video" => "Seleccionadores CSS"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Estilos de Texto y Fuente",
                    "Concepto" => "CSS permite personalizar los estilos de texto, incluyendo el tamaño de la fuente, el color, el espaciado y el estilo (negrita, cursiva).",
                    "Ejemplo" => "html\n<style>\np {\n  font-size: 16px;\n  color: #333;\n}\n</style>\n",
                    "Video" => "Estilos de Texto en CSS"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Diseño de Layout con CSS",
                    "Concepto" => "CSS proporciona diversas técnicas para diseñar el layout de una página, incluyendo el uso de flexbox, grid, y técnicas de diseño responsivo.",
                    "Ejemplo" => "html\n<style>\n.container {\n  display: flex;\n  justify-content: space-between;\n}\n.item {\n  flex: 1;\n}\n</style>\n",
                    "Video" => "Diseño de Layout con CSS"
                ]
            ]
        ],
        [
            "Leccion" => "3",
            "Titulo" => "Formularios en HTML",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Estructura de un Formulario",
                    "Concepto" => "Los formularios HTML permiten a los usuarios enviar datos a un servidor. Se estructuran utilizando la etiqueta <form> y contienen varios controles como <input>, <textarea>, y <select>.",
                    "Ejemplo" => "html\n<form action='/enviar' method='post'>\n  <label for='nombre'>Nombre:</label>\n  <input type='text' id='nombre' name='nombre'>\n  <input type='submit' value='Enviar'>\n</form>\n",
                    "Video" => "Estructura de Formularios en HTML"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Tipos de Inputs y Etiquetas",
                    "Concepto" => "Existen diferentes tipos de inputs que se utilizan para recopilar diversos tipos de datos, como texto, números, correos electrónicos, y más. Las etiquetas <label> mejoran la accesibilidad al asociar textos descriptivos con los campos del formulario.",
                    "Ejemplo" => "html\n<label for='email'>Correo Electrónico:</label>\n<input type='email' id='email' name='email'>\n",
                    "Video" => "Tipos de Inputs en HTML"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Validación de Formularios",
                    "Concepto" => "HTML5 proporciona atributos para la validación de formularios, como required, minlength, maxlength, y pattern, que ayudan a asegurar que los datos ingresados sean válidos antes de enviar el formulario.",
                    "Ejemplo" => "html\n<input type='text' name='edad' minlength='1' maxlength='3' required>\n",
                    "Video" => "Validación de Formularios en HTML"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Envío y Procesamiento de Formularios",
                    "Concepto" => "El procesamiento de formularios se maneja en el servidor y puede incluir la captura y validación de datos enviados, así como la respuesta al usuario. La etiqueta action del formulario define la URL de destino para el procesamiento.",
                    "Ejemplo" => "html\n<form action='/procesar_formulario' method='post'>\n  <!-- campos del formulario aquí -->\n</form>\n",
                    "Video" => "Envío de Formularios HTML"
                ]
            ]
        ],
        [
            "Leccion" => "4",
            "Titulo" => "Multimedia y Enlaces en HTML",
            "Subtemas" => [
                [
                    "Subtema" => "1",
                    "Titulo" => "Inserción de Imágenes",
                    "Concepto" => "La etiqueta <img> se utiliza para insertar imágenes en una página web. El atributo src especifica la ruta de la imagen, y alt proporciona una descripción alternativa.",
                    "Ejemplo" => "html\n<img src='imagen.jpg' alt='Descripción de la imagen'>\n",
                    "Video" => "Insertar Imágenes en HTML"
                ],
                [
                    "Subtema" => "2",
                    "Titulo" => "Añadir Enlaces",
                    "Concepto" => "La etiqueta <a> se utiliza para crear enlaces a otras páginas web o recursos. El atributo href define la URL de destino del enlace.",
                    "Ejemplo" => "html\n<a href='https://www.ejemplo.com'>Visitar Ejemplo</a>\n",
                    "Video" => "Crear Enlaces en HTML"
                ],
                [
                    "Subtema" => "3",
                    "Titulo" => "Integración de Videos y Audios",
                    "Concepto" => "Las etiquetas <video> y <audio> se utilizan para insertar contenido multimedia en una página web. Estas etiquetas permiten controlar la reproducción, el volumen y otras opciones.",
                    "Ejemplo" => "html\n<video width='320' height='240' controls>\n  <source src='video.mp4' type='video/mp4'>\n  Tu navegador no soporta el elemento de video.\n</video>\n",
                    "Video" => "Integrar Videos y Audios en HTML"
                ],
                [
                    "Subtema" => "4",
                    "Titulo" => "Uso de Iframes",
                    "Concepto" => "La etiqueta <iframe> se utiliza para incrustar otro documento HTML dentro de la página actual. Esto es útil para incluir contenido de otros sitios web o aplicaciones dentro de tu página.",
                    "Ejemplo" => "html\n<iframe src='https://www.ejemplo.com' width='600' height='400'></iframe>\n",
                    "Video" => "Uso de Iframes en HTML"
                ]
            ]
        ]
    ]
];

echo json_encode($data);
?>