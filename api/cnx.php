<?php

// Datos de conexión a la base de datos MySQL
$servername = "localhost";  // Nombre del servidor de MySQL
$username = "brandon";      // Nombre de usuario de MySQL
$password = "0Cannabis0$$$";   // Contraseña del usuario
$dbname = "ApiDatabase";  // Nombre de la base de datos a la que quieres conectarte

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";



?>
