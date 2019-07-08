<?php

require_once('funciones.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <form class="contacto" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="apellido" placeholder="Apellido">
        <br>
        <input type="email" name="email" placeholder="Correo electrónico">
        <br>
        <input type="text" name="asunto" placeholder="Breve descripción">
        <br>
        <textarea name="mensaje" rows="10" cols="40">Por favor, escriba su mensaje aquí. Se enviará una copia del mismo a su casilla de correo electrónico.</textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
