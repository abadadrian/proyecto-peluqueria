<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';

class Worker extends Model
{
    public function __construct()
    {
        if (isset($this->birthdate)) {
            $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
        }
    }

    public static function all()
    {
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
        $stmt->setFetchMode(PDO::FETCH_CLASS, Worker::class);
        //$workers-services = $stmt->fetch(PDO::FETCH_CLASS):
        //$stmt2 = $db->prepare('SELECT * FROM service WHERE id = :id');
        //$stmt2->bienValue(':id','$workers_services->service_id)          <-
        //$stmt2->execute();
        //$stmt2->setFetchMode(PDO::FETCH_CLASS, Service::class);
        //$services = $stmt2->fetch(PDO::FETCH_CLASS);
        //return $services;

        $worker = $stmt->fetch(PDO::FETCH_CLASS);
        return $worker;
    }

    public static function findbyEmail($email)
    {

        $db = Worker::db();
        $stmt = $db->prepare('SELECT * FROM workers WHERE email=:email');
        $stmt->execute(array(':email' => $email));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Worker::class);
        $worker = $stmt->fetch(PDO::FETCH_CLASS);
        return $worker;
    }

    public function setPassword($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $db = Worker::db();
        $stmt = $db->prepare('UPDATE workers SET password = :password WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $password;
    }

    public static function passwordVerify($password, $worker)
    {
        return password_verify($password, $worker->password);
    }

    public function insert()
    {
        $db = Worker::db();
        $stmt = $db->prepare('INSERT INTO workers(name, surname, email, password, birthdate,  details) VALUES(:name, :surname, :email, :password, :birthdate,  :details)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':details', $this->details);
        return $stmt->execute();
    }
    public function delete()
    {
        $db = Worker::db();
        $stmt = $db->prepare('DELETE FROM workers WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
    public function save()
    {
        $db = Worker::db();
        $stmt = $db->prepare('UPDATE workers SET name = :name, surname = :surname, email = :email, birthdate = :birthdate,  details = :details WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname
        ', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':details', $this->details);
        return $stmt->execute();
    }

    public function __get($atributoDesconocido)
    {
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    }

    public function service()
    {
        $db = Worker::db();
        $stmt = $db->prepare('SELECT * FROM workers_services ws join services s on (s.id= ws.services_id) WHERE ws.workers_id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
        $workers_services = $stmt->fetchAll(PDO::FETCH_CLASS, Service::class);
        return $workers_services;
    }
}
