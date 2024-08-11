<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_leccion'];

    include "api/cnx.php";

    // Obtener los datos actuales de la lección
    $sql = "SELECT * FROM lecciones WHERE id_leccion = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
} else {
    echo "Método no permitido.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Lección</title>
</head>
<body>
    <h2>Editar Lección</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id_leccion" value="<?php echo htmlspecialchars($row['id_leccion']); ?>">
        <label for="leccion">Lección:</label>
        <input type="text" id="leccion" name="leccion" value="<?php echo htmlspecialchars($row['leccion']); ?>" required><br>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required><?php echo htmlspecialchars($row['contenido']); ?></textarea><br>
        <label for="ejemplos">Ejemplos:</label>
        <textarea id="ejemplo" name="ejemplo" required><?php echo htmlspecialchars($row['ejemplo']); ?></textarea><br>
        <label for="recursos">Recursos:</label>
        <textarea id="recursos" name="recursos" required><?php echo htmlspecialchars($row['recursos']); ?></textarea><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
