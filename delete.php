<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    include "api/cnx.php";

    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM lecciones WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "La lección ha sido eliminada correctamente.";
        } else {
            echo "Error al eliminar la lección: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php"); // Redirige a la página principal después de la eliminación
    exit;
} else {
    echo "Método no permitido.";
}
?>
