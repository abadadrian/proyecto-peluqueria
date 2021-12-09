<?php
namespace Core;

//necesario para referirnos a ella
use PDO;
use PDOException;
/*
* Vamos a definir la conexión a la BD dentro de una superclase modelo
*       y el resto de las clases que acceden a BD heredan de ella
*/
class Model
{
    protected static function db()
    {
        try {
            $uri = "mysql:host=" . 
                $_ENV['DB_HOST'] . ":" . 
                $_ENV['DB_PORT'] . ";dbname=" . 
                $_ENV['DB_NAME'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['MYSQL_ROOT_PASSWORD'];
            $db = new PDO($uri, $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}
