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

    public static function find($id) 
    {
        $db = Model::db();
        $stmt = $db->prepare('SELECT * FROM photos WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Photo::class);
        $photo = $stmt->fetch(PDO::FETCH_CLASS);
        return $photo;
    }    

    public function insert()
    {
        $db = Photo::db();
        $stmt = $db->prepare('INSERT into photos (name, path) VALUES (:name, :path)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':path', $this->path);
        return $stmt->execute();
    }

    public function delete(){ 
        $db = Photo::db();
        $stmt = $db->prepare('DELETE FROM photos WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();       
    }

    public function save(){ 
        $db = Photo::db();
        $stmt = $db->prepare('UPDATE photos SET name = :name, path = :path WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':path', $this->path);
        return $stmt->execute();       
    }
}
