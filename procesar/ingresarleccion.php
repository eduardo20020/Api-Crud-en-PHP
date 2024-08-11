<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $leccion = $_POST['leccion'];
    $contenido = $_POST['contenido'];
    $ejemplos = $_POST['ejemplos'];
    $recursos = $_POST['recursos'];

    echo "la leccion es : $leccion \n";
    echo "el contenido es : $contenido \n";
    echo "los ejemplos son : $ejemplos \n";
    echo "los recursos son : $recursos \n";



}else{
    echo "El formulario no se ha enviado correctamente.";
}




?>