<?php

$nombre = $apellido = $email = $asunto = $mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido = test_input($_POST["apellido"]);
  $email = test_input($_POST["email"]);
  $asunto = test_input($_POST["asunto"]);
  $mensaje = test_input($_POST["mensaje"]);
}

function validarFormContacto($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  var_dump($data);
}

?>
