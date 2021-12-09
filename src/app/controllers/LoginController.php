<?php

namespace App\Controllers;

use App\Models\Worker;

class LoginController
{

    public function index()
    {
        require "app/views/login.php";
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $worker = Worker::findbyEmail($email);

        if ($worker == false) {
            $_SESSION['message'] = 'Error el usuario no existe.';
            header('Location:/login');
        } else {
            if (Worker::passwordVerify($password, $worker)) {
                $_SESSION['worker'] = $worker;
                header('Location:/admin');
            } else {
                $_SESSION['message'] = 'Error, la contraseña es incorrecta.';
                header('Location:/login');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        require "app/views/login.php";
    }

    public function procesarsubida()
    {
        // $_FILES contiene información sobre el fichero que se está subiendo
        // Es un array bidimensional :
        //     primer índice: identifica el fichero según el atributo name en el formulario  
        //     claves para el segundo índice: 
        //          name: nombre del fichero en el cliente
        //          size: tamaño en bytes
        //          type: tipo MIME del fichero
        //          tmp_name: nombre temporal con el que se ha subido al servidor
        //          error: código de error asociado a la subida
        // El fichero se almacena en el directorio temporal del servidor
        //  -> para moverlo a otro directorio: bool move_uploaded_file ($fichero, $destino)

        $tamanyo = $_FILES["fichero"]["size"];
        if ($tamanyo > 256 * 1024) {
            echo "<br>Demasiado grande";
            return;
        }
        echo "Nombre del fichero" . $_FILES["fichero"]["name"];
        echo "<br>Nombre temporal del fichero en el servidor" . $_FILES["fichero"]["tmp_name"];

        // Crear el directorio "subidos" a nivel del index.php
        // Despues de crearlo le damos permisos sudo chmod -R 777 subidos/
        $res = move_uploaded_file($_FILES["fichero"]["tmp_name"], "subidos/" . $_FILES["fichero"]["name"]);
        if ($res) {
            echo "<br>Fichero guardado";
        } else {
            echo "<br>Error";
        }
    }
}
