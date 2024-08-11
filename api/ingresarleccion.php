<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar y sanitizar las entradas
    $leccion = trim($_POST['leccion']);
    $contenido = trim($_POST['contenido']);
    $ejemplos = trim($_POST['ejemplos']);
    $recursos = trim($_POST['recursos']);

    include "cnx.php";

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO lecciones (leccion, contenido, ejemplos, recursos) 
            VALUES (?, ?, ?, ?)";

    // Preparar la sentencia
    if ($stmt = $conn->prepare($sql)) {
        // Bind de los parámetros
        $stmt->bind_param("ssss", $leccion, $contenido, $ejemplos, $recursos);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            echo "Los datos han sido insertados correctamente.";
        } else {
            echo "Error al insertar los datos: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();

} else {
    echo "El formulario no se ha enviado correctamente.";
}
?>
