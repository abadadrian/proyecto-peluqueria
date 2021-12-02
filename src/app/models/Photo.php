<?php

namespace App\Models;

use PDO;
use Core\Model;

class Photo extends Model
{
    public static function all()
    {
        //obtener conexión
        $db = Photo::db();
        //preparar consulta
        $sql = "SELECT * FROM photos";
        //ejecutar
        $statement = $db->query($sql); // query para ejecutar la consulta
        //el resultado puede ser tomado usan las funciones de de PDO
        //fetch recoge registro a registro. Si hay muchos requiere un bucle
        //fetch_all recoge arrays
        $photos = $statement->fetchAll(PDO::FETCH_CLASS, Photo::class);
        //retornar
        return $photos;
    }

    public function insert()
    {
        $db = Photo::db();
        $stmt = $db->prepare("INSERT into photos (name, path) VALUES (:name, :path)");
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':path', $this->path);
        return $stmt->execute();
    }
}
