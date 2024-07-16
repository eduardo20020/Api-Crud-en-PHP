<?php

// Obtener y decodificar el JSON recibido
$datos = json_decode(file_get_contents('php://input'), true);

// Verificar si hubo un error en la decodificación del JSON
if($datos === null){
    echo "Error en el JSON";
    exit;
}

// Verificar la existencia de los campos 'correo' y 'contra'
if(!isset($datos['correo']) || !isset($datos['contra'])){
    echo "Faltan campos requeridos";
    exit;
}

// Obtener los valores de correo y contra del arreglo decodificado
$correo = $datos['correo'];
$contra = $datos['contra'];

$sql = "SELECT correo, contra FROM Usuarios WHERE correo = '$correo' AND contra = '$contra'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "\npuedes  pasar Inicio de seseion correcto";
} else {

}