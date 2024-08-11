<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Lecciones</title>
    <style>
        .container {
            display: flex;
        }
        .formulario {
            width: 50%;
        }
        .datos {
            width: 50%;
            padding-left: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        .button {
            margin: 0 5px;
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer;
        }
        .edit-button {
            background-color: #4CAF50;
        }
        .delete-button {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <!-- Aquí iría tu formulario para insertar o editar datos -->
        </div>
        <div class="datos">
            <?php
            include "api/cnx.php";
            
            $sql = "SELECT * FROM lecciones";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Lección</th>
                            <th>Contenido</th>
                            <th>Ejemplos</th>
                            <th>Recursos</th>
                            <th>Acciones</th>
                        </tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['id_leccion']) . "</td>
                            <td>" . htmlspecialchars($row['leccion']) . "</td>
                            <td>" . htmlspecialchars($row['contenido']) . "</td>
                            <td>" . htmlspecialchars($row['ejemplo']) . "</td>
                            <td>" . htmlspecialchars($row['recursos']) . "</td>
                            <td>
                                <form action='edit.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . htmlspecialchars($row['id_leccion']) . "'>
                                    <button type='submit' class='button edit-button'>Editar</button>
                                </form>
                                <form action='delete.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . htmlspecialchars($row['id_leccion']) . "'>
                                    <button type='submit' class='button delete-button'>Eliminar</button>
                                </form>
                            </td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "No hay datos disponibles.";
            }
            
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

