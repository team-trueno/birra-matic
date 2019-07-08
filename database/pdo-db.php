<?php
/**
 * Configuración basica para el uso de PDO
 * 
 */

/** Hay que incluir el archivo de configuración de parámetros */
require_once('../config/cfg-db.php');



function conectarDB()
{
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT;
    try {
        $db = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
        var_dump($db);
    } catch (PDOException $e) {
        echo "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

conectarDB();