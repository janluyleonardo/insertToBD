<?php

//Mostramos la conexion para realizar la actualizacion
//Usaremos PDO para conectar PHP con MySQL

/*$connect = new PDO("mysql:host=localhost;dbname=php_consultapdo", "root", "");*/

// DB CREDENCIALES DE USUARIO.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mdsr');

// Ahora, establecemos la conexión.
try {
  // Ejecutamos las variables y aplicamos UTF8
  $connect = new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
    DB_USER,
    DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
  );
} catch (PDOException $e) {
  exit("Error: " . $e->getMessage());
}