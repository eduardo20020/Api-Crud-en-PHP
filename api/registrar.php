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
// Comprobar si el correo ya existe
$sql_check = "SELECT * FROM Usuarios WHERE correo = '$correo'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "El correo ya existe";
} else {
    // Consulta SQL para insertar datos
    $sql_insert = "INSERT INTO Usuarios (nombre, correo, contra, progreso) VALUES ('$nombre', '$correo', '$contra', '0%')";

    // Ejecutar consulta y verificar inserción
    if ($conn->query($sql_insert) === TRUE) {
        echo "Datos insertados";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
