<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_leccion'];

    include "api/cnx.php";

    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM lecciones WHERE id_leccion = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "La lección ha sido eliminada correctamente.";
            header("Location: index.php");
            exit();
        } else {
            echo "Error al eliminar la lección: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
    exit;
} else {
    echo "Método no permitido.";
}
?>
