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
        echo "<div class='alert alert-danger'>Error en la preparación de la consulta: " . $conn->error . "</div>";
    }
} else {
    echo "<div class='alert alert-warning'>Método no permitido.</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Lección</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Editar Lección</h2>
        <form action="update.php" method="post" class="card p-4 shadow-sm">
            <input type="hidden" name="id_leccion" value="<?php echo htmlspecialchars($row['id_leccion']); ?>">
            
            <div class="mb-3">
                <label for="leccion" class="form-label">Lección:</label>
                <input type="text" id="leccion" name="leccion" class="form-control" value="<?php echo htmlspecialchars($row['leccion']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido:</label>
                <textarea id="contenido" name="contenido" class="form-control" rows="4" required><?php echo htmlspecialchars($row['contenido']); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="ejemplos" class="form-label">Ejemplos:</label>
                <textarea id="ejemplo" name="ejemplo" class="form-control" rows="3" required><?php echo htmlspecialchars($row['ejemplo']); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="recursos" class="form-label">Recursos:</label>
                <textarea id="recursos" name="recursos" class="form-control" rows="3" required><?php echo htmlspecialchars($row['recursos']); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Actualizar</button>
        </form>
    </div>

    <!-- Incluye Bootstrap JS (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
