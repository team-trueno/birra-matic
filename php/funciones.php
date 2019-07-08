<?php

// estos datos luego van a obtenerse de $_POST
$datos = [
    'nombre' => 'Santiago',
    'apellido' => 'Facchini',
    'email' => 'santiago.facchini@icloud.com',
    'asunto' => 'Test',
    'mensaje' => 'Mensaje'
];

var_dump($datos);

function validarDatosContacto($datos) {
    foreach ($datos as $key => $value) {
        trim($value);
        stripslashes($value);
        htmlspecialchars($value);
    }
    return $datos;
}

?>
