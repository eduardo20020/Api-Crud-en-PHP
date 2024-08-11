<?php

//////////////
include "cnx.php";
// Comprobar si el correo ya existe
$sql_check = "SELECT * FROM Usuarios";
$result = $conn->query($sql_check);

echo $result


?>