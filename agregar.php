<?php
session_start();

if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    // Redirige al usuario a la página de inicio de sesión si no está logueado
    header("Location: index.html");
    exit();
}




?>

<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Lecciones</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Agregar lecciones a la APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Precios</a>
                    </li>
                    <li class="nav-item">
                        <button>salir</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-5">
                <!-- Aquí iría tu formulario para insertar o editar datos -->
                <form action="api/ingresarleccion.php" method="post" class="card p-4 shadow-sm">
                    <div class="mb-3">
                        <label for="leccion" class="form-label">Lección:</label>
                        <input type="text" name="leccion" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea name="contenido" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="ejemplos" class="form-label">Ejemplos:</label>
                        <textarea name="ejemplos" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="recursos" class="form-label">Recursos:</label>
                        <input name="recursos" class="form-control" rows="3" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
            <div class="col-md-7">
                <?php
                include "api/cnx.php";

                $sql = "SELECT * FROM lecciones";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='table-responsive'><table class='table table-striped table-bordered'>
                            <thead class='table-light'>
                                <tr>
                                    <th>ID</th>
                                    <th>Lección</th>
                                    <th>Contenido</th>
                                    <th>Ejemplos</th>
                                    <th>Recursos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>";
                    
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['id_leccion']) . "</td>
                                <td>" . htmlspecialchars($row['leccion']) . "</td>
                                <td>" . htmlspecialchars($row['contenido']) . "</td>
                                <td>" . htmlspecialchars($row['ejemplo']) . "</td>
                                <td>" . htmlspecialchars($row['recursos']) . "</td>
                                <td class='text-center'>
                                    <form action='edit.php' method='post' class='d-inline'>
                                        <input type='hidden' name='id_leccion' value='" . htmlspecialchars($row['id_leccion']) . "'>
                                        <button type='submit' class='btn btn-sm btn-success'>Editar</button>
                                    </form>
                                    <form action='delete.php' method='post' class='d-inline'>
                                        <input type='hidden' name='id_leccion' value='" . htmlspecialchars($row['id_leccion']) . "'>
                                        <button type='submit' class='btn btn-sm btn-danger'>Eliminar</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                    echo "</tbody></table></div>";
                } else {
                    echo "<p class='alert alert-info'>No hay datos disponibles.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Incluye Bootstrap JS (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <!--<script>
    window.onbeforeunload = function() {
        fetch('local/logout.php', { method: 'POST' });
    };

    </script>
     -->
</body>
</html>

