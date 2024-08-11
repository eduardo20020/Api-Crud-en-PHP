<?php

//////////////
include "cnx.php";
// Comprobar si el correo ya existe
$sql_check = "SELECT * FROM Usuarios";
$result = $conn->query($sql_check);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Obtener todos los resultados como un array asociativo
    $data = $result->fetch_all(MYSQLI_ASSOC);
    
    // Convertir el array en formato JSON
    $json_data = json_encode($data);
    
    // Enviar la respuesta JSON
    echo $json_data;
} else {
    // En caso de no haber resultados, enviar un JSON vacío
    echo json_encode([]);
}

// Cerrar la conexión
$conn->close();
?>