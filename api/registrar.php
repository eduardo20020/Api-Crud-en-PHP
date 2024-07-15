<?php

// Obtener y decodificar el JSON recibido
$ArrarDecodificado = json_decode(file_get_contents('php://input'), true);

// Verificar si hubo un error en la decodificación del JSON
if($ArrarDecodificado === null){
    echo "Error en el JSON";
    exit;
}

// Verificar la existencia de los campos 'correo' y 'contra'
if(!isset($ArrarDecodificado['correo']) || !isset($ArrarDecodificado['contra'])){
    echo "Faltan campos requeridos";
    exit;
}

// Obtener los valores de correo y contra del arreglo decodificado
$correo = $ArrarDecodificado['correo'];
$contra = $ArrarDecodificado['contra'];

// Imprimir los valores obtenidos
echo "Tu correo es: " . $correo . "\n";
echo "Tu contraseña es: " . $contra . "\n";

?>
