<?php
namespace App\Models;
use PDO;
// use DateTime;
use Core\Model;
class Worker extends Model
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
        $db = Worker::db();
        //preparar consulta
        $sql = "SELECT * FROM workers";
        //ejecutar
        $statement = $db->query($sql); // query para ejecutar la consulta
        //el resultado puede ser tomado usan las funciones de de PDO
        //fetch recoge registro a registro. Si hay muchos requiere un bucle
        //fetch_all recoge arrays
        $worker = $statement->fetchAll(PDO::FETCH_CLASS, Worker::class);
        //retornar
        return $worker;
    }

    /*
    * El método find usa funciones preparadas
    * Este método carga un registro a partir de su id
    */
    public static function find($id) 
    {
        $db = Worker::db();
        $stmt = $db->prepare('SELECT * FROM workers WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto User debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, Worker::class);
        $worker = $stmt->fetch(PDO::FETCH_CLASS);
        //Las fechas se mostrarán con el parseo de mysql
        //  Si es tipo Date: año-mes-dia
        //  Si es DateTime: año:mes-dia h:m:s
        //Php puede manejar de forma nativa datos fecha:
        //  funciones: date() o strtotime()
        // echo $this->birthdate->format('d-m-y');
        //clase dateTime
        //$this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate)
        return $worker;
    }    
    public function insert(){ 
        $db = Worker::db();
        $stmt = $db->prepare('INSERT INTO workers(name, surname, email, details) VALUES(:name, :surname, :email, :details)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        return $stmt->execute();  
    }
    public function delete(){ 
        $db = Worker::db();
        $stmt = $db->prepare('DELETE FROM workers WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();       
    }
    public function save(){ 
        $db = Worker::db();
        $stmt = $db->prepare('UPDATE workers SET name = :name, surname = :surname, email = :email, details = :details WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        return $stmt->execute();        
    }
}