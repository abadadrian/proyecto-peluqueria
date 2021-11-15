<?php

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
        require 'app/views/homeAdmin.php';
      } else {
        echo "Usario o contraseña incorrectos";
        require "app/views/login.php";
      }
    }
}
