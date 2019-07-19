<?php
/**
 * [insertarUsuario description]
 * @param  PDO    $db [description]
 * @return [type]     [description]
 */
function insertarUsuario(PDO $db) {
    $consulta = $db->prepare("INSERT INTO usuarios values (null, :nombre, :apellido, :email, :contrasenia)");
    $consulta->bindValue(":nombre", $_POST["nombre"]);
    $consulta->bindValue(":apellido", $_POST["apellido"]);
    $consulta->bindValue(":email", $_POST["email"]);
    $consulta->bindValue(":contrasenia", $_POST["password"]);
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!-- Estructura básica de registro -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrate</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <br>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <br>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <br>
        <input type="password" name="password" placeholder="Contraseña" required>
        <br>
        <input type="password" name="password-repeat" placeholder="Repetir contraseña" required>
        <br>
        <button type="submit">Registrarse</button>
        <br>
        <p>¿Ya estás registrado? <a href="#">Inicia sesión</a></p>
    </form>
</body>
</html>
