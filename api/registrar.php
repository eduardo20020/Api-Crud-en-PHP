<?php

$ArrarDecodificado = json_decode(file_get_contents('php://input'));

if($ArrarDecodificado == null){
    echo "Error en el Json";
    exit;
}

$correo = $ArrarDecodificado['correo'];
$contra = $ArrarDecodificado['contra'];

echo "Tu correo es" . $correo . "  _:) \n";
echo "Tu password es" . $contra . "  _:)";



?>
