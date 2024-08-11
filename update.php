<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_leccion'];
    $leccion = $_POST['leccion'];
    $contenido = $_POST['contenido'];
    $ejemplos = $_POST['ejemplo'];
    $recursos = $_POST['recursos'];

    include "api/cnx.php";

    // Preparar la consulta SQL para actualizar los datos
    $sql = "UPDATE lecciones SET leccion = ?, contenido = ?, ejemplo = ?, recursos = ? WHERE id_leccion = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $leccion, $contenido, $ejemplos, $recursos, $id);

        if ($stmt->execute()) {
            echo "La lección ha sido actualizada correctamente.";
        } else {
            echo "Error al actualizar la lección: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php"); // Redirige a la página principal después de la actualización
    exit;
} else {
    echo "Método no permitido.";
}
?>
