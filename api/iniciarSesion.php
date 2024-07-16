<?php

// Obtener y decodificar el JSON recibido
$datos = json_decode(file_get_contents('php://input'), true);

// Verificar si hubo un error en la decodificación del JSON
if ($datos === null) {
    echo json_encode(["error" => "Error en el JSON"]);
    exit;
}

// Verificar la existencia de los campos 'correo' y 'contra'
if (!isset($datos['correo']) || !isset($datos['contra'])) {
    echo json_encode(["error" => "Faltan campos requeridos"]);
    exit;
}

// Obtener los valores de correo y contra del arreglo decodificado
$correo = $datos['correo'];
$contra = $datos['contra'];

include "cnx.php";

if (!$conn) {
    echo json_encode(["error" => "Error en la conexión a la base de datos"]);
    exit;
}

// Preparar y ejecutar la consulta segura para evitar SQL Injection
$stmt = $conn->prepare("SELECT correo, contra FROM Usuarios WHERE correo = ? AND contra = ?");
$stmt->bind_param("ss", $correo, $contra);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(["message" => "Inicio de sesión correcto"]);
} else {
    echo json_encode(["error" => "Correo o contraseña incorrectos"]);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
