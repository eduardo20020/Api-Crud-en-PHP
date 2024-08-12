<?php
include "cnx.php";
// Consulta SQL
$sql = "SELECT * FROM lecciones";
$result = $conn->query($sql);

// Obtener todos los resultados como un array asociativo
$data = $result->fetch_all(MYSQLI_ASSOC);

// Configurar la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($data);

// Cerrar conexión
$conn->close();
?>
