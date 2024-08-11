<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST['correo'];
    $contra = $_POST['contra'];


    if($correo = 'admin@admin' && $contra = 'admin'){
        session_start();

        // Suponiendo que validas el usuario y la contraseña correctamente
        $_SESSION['correo'] = $correo; // Almacena el nombre de usuario en la sesión
        $_SESSION['logueado'] = true; // Indica que el usuario ha iniciado sesión

        header("Location: ../agregar.php");
        exit();
    }



} else {
    echo "Método no permitido.";
}


?>