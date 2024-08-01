<?php

// Obtener y decodificar el JSON recibido
$datos = json_decode(file_get_contents('php://input'), true);

// Verificar si hubo un error en la decodificación del JSON
if ($datos === null) {
    echo json_encode(["error" => "Error en el JSON"]);
    exit;
}

// Verificar si los campos requeridos están presentes
if (!isset($datos['progreso']) || !isset($datos['correo'])) {
    echo json_encode(["error" => "Faltan campos requeridos"]);
    exit;
}

// Obtener los valores de correo y progreso del arreglo decodificado
$correo = $datos['correo'];
$progreso = $datos['progreso'];

include "cnx.php";

if (!$conn) {
    echo json_encode(["error" => "Error en la conexión a la base de datos"]);
    exit;
}

try {
    // Preparar la consulta segura para evitar SQL Injection
    $stmt = $conn->prepare("UPDATE Usuarios SET progreso = ? WHERE correo = ?");
    if (!$stmt) {
        throw new Exception("Error al preparar la declaración: " . $conn->error);
    }

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param("ss", $progreso, $correo);
    if (!$stmt->execute()) {
        throw new Exception("Error al ejecutar la declaración: " . $stmt->error);
    }

    // Verificar si se actualizó alguna fila
    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => "Datos actualizados correctamente"]);
    } else {
        echo json_encode(["error" => "No se encontró el usuario o no hubo cambios"]);
    }

    // Cerrar la declaración
    $stmt->close();
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
} finally {
    // Cerrar la conexión
    $conn->close();
}

?>
