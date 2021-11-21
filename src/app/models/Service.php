<?php
namespace App\Models;

use PDO;
// use DateTime;
use Core\Model;

require_once 'core/Model.php';

class Service extends Model
{
    public function __construct()
    {
        // $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }

    /*
    * Método para buscar todos los registros
    */
    public static function all(){ 
        //obtener conexión
        $db = Service::db();
        //preparar consulta
        $sql = "SELECT * FROM services";
        //ejecutar
        $statement = $db->query($sql); // query para ejecutar la consulta
        //el resultado puede ser tomado usan las funciones de de PDO
        //fetch recoge registro a registro. Si hay muchos requiere un bucle
        //fetch_all recoge arrays
        $services = $statement->fetchAll(PDO::FETCH_CLASS, Service::class);
        //retornar
        return $services;
    }

    /*
    * El método find usa funciones preparadas
    * Este método carga un registro a partir de su id
    */
    public static function find($id) 
    {
        $db = Service::db();
        $stmt = $db->prepare('SELECT * FROM services WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto User debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, Service::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        //Las fechas se mostrarán con el parseo de mysql
        //  Si es tipo Date: año-mes-dia
        //  Si es DateTime: año:mes-dia h:m:s
        //Php puede manejar de forma nativa datos fecha:
        //  funciones: date() o strtotime()
        // echo $this->birthdate->format('d-m-y');
        //clase dateTime
        //$this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate)
        return $user;
    }    
    public function insert(){ 
        $db = Service::db();
        $stmt = $db->prepare('INSERT INTO services(name, precio, tiempo) VALUES(:name, :precio, :tiempo)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':precio', $this->precio);
        $stmt->bindValue(':tiempo)', $this->tiempo);
        return $stmt->execute();      
    }
    public function delete(){ 
        $db = Service::db();
        $stmt = $db->prepare('DELETE FROM services WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();       
    }
    public function save(){ 
        $db = Service::db();
        $stmt = $db->prepare('UPDATE services SET name = :name, precio = :precio, tiempo = :tiempo WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':precio', $this->precio);
        $stmt->bindValue(':tiempo', $this->tiempo);
        return $stmt->execute();        
    }
}