<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $leccion = $_POST['leccion'];
    $contenido = $_POST['contenido'];
    $ejemplos = $_POST['ejemplos'];
    $recursos = $_POST['recursos'];

    echo "\nla leccion es : $leccion \n";
    echo "\nel contenido es : $contenido \n";
    echo "\nlos ejemplos son : $ejemplos \n";
    echo "\nlos recursos son : $recursos \n";



}else{
    echo "El formulario no se ha enviado correctamente.";
}




?>