<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $leccion = $_POST['leccion'];
    $contenido = $_POST['contenido'];
    $ejemplos = $_POST['ejemplos'];
    $recursos = $_POST['recursos'];

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




}else{
    echo "El formulario no se ha enviado correctamente.";
}

}


?>