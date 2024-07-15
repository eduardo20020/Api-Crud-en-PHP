<?php

// Obtener y decodificar el JSON recibido
$ArrarDecodificado = json_decode(file_get_contents('php://input'), true);

// Verificar si hubo un error en la decodificación del JSON
if($ArrarDecodificado === null){
    echo "Error en el JSON";
    exit;
}

// Verificar la existencia de los campos 'correo' y 'contra'
if(!isset($ArrarDecodificado['correo']) || !isset($ArrarDecodificado['contra']) || !isset($ArrarDecodificado['nombre'])){
    echo "Faltan campos requeridos";
    exit;
}

// Obtener los valores de correo y contra del arreglo decodificado
$nombre = $ArrarDecodificado['nombre'];
$correo = $ArrarDecodificado['correo'];
$contra = $ArrarDecodificado['contra'];


//////////////
include "cnx.php";
// Consulta SQL para insertar datos
$sql = "INSERT INTO Usuarios (nombre, correo, contra) VALUES ('$nombre', '$correo', '$contra')";

// Ejecutar consulta y verificar inserción
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}


?>
