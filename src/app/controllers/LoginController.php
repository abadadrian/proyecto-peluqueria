<?php
namespace App\Controllers;

use App\Models\Worker;

class LoginController
{

  public function index()
  {
    require "app/views/login.php";
  }

  public function login(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $worker = Worker::findbyEmail($email);
    
    if($worker == false){
        $_SESSION['message'] = 'Error el usuario no existe.';
        header('Location:/login');
    }
    else
    {
        // Comprueba que la contraseña coincida con la contraseña cifrada
        if(Worker::passwordVerify($password, $worker))
        {
            $_SESSION['worker'] = $worker;
            header('Location:/admin');
        }
        else{
            $_SESSION['message'] = 'Error, la contraseña es incorrecta.';
            header('Location:/login');
        }
    }
}

public function logout()
{
    unset($_SESSION['worker']);
    unset($_SESSION['message']);
    session_destroy();
    require "app/views/login.php";
}
}