<?php

namespace App\Controllers;

class LoginController
{

  public function index()
  {
    require "app/views/login.php";
  }

  public function auth()
  {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
    if ($_SESSION['usuario'] == "cristina" && $_SESSION['clave'] == '1234') {
      header('Location: /admin');
    } else {
      header('Location: /login');
    }
  }

  public function logout()
  {
    header('location:/home');
  }

  public function volverHomeAdmin()
  {
    require 'app/views/homeAdmin.php';
  }
}
