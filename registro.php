<?php
// 28/07/19: funciona ok, luego lo haré más "POO"
session_start();

$_SESSION["mensaje"] = "";

$dsn = "mysql:host=127.0.0.1;dbname=test_db;port=8889"; // Data Source Name
$dbusuario = "root";
$dbpass = "root";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$db = new PDO($dsn, $dbusuario, $dbpass, $opt);

try {
    $db = new PDO($dsn, $dbusuario, $dbpass);
} catch (PDOException $e) {
    echo "Falló la conexión: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] === POST) {
    if ($_POST["pass"] == $_POST["pass-repeat"]) {
        $consulta = $db->prepare("INSERT INTO users (nombre, apellido, email, pass) VALUES (:nombre, :apellido, :email, :pass)");
        $consulta->bindValue(':nombre', $_POST["nombre"]);
        $consulta->bindValue(':apellido', $_POST["apellido"]);
        $consulta->bindValue(':email', $_POST["email"]);
        $consulta->bindValue(':pass', password_hash($_POST["pass"], PASSWORD_DEFAULT));
        $consulta->execute();
        $_SESSION["mensaje"] = "Registro de manera exitosa";
    } else {
        $_SESSION["mensaje"] = "Ocurrió un error al procesar el registro";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrate</title>
</head>
<body>
    <form method="post" action="registro.php">
        <p>¡Crea tu cuenta!</p>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <br>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <br>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <br>
        <p>Día</p>
        <input type="number" name="dia" placeholder="DD" required>
        <p>Mes</p>
        <input type="number" name="mes" placeholder="MM" required>
        <p>Año</p>
        <input type="number" name="anio" placeholder="AAAA" required>
        <br>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <br>
        <input type="password" name="pass-repeat" placeholder="Repetir contraseña" required>
        <br>
        <button type="submit">Registrarse</button>
        <br>
        <p>¿Ya estás registrado? <a href="#">Inicia sesión</a></p>
        <?php echo $_SESSION["mensaje"]; ?>
    </form>
</body>
</html>
