<?php

class App
{
    public function __construct(){
        session_start();
    }

    public function run()
    {

        if (isset($_GET['method'])) {
            $method = $_GET['method'];
            $this->$method();
        } else {
            $this->home();
        }
    }

    public function home()
    {
        include('views/home.php');
    }

    public function login()
    {
        include('views/login.php');
    }

    public function gestorEmpleadas()
    {
        include('views/gestorEmpleadas.php');
    }

    public function homeAdmin(){
        include('views/homeAdmin.php');
    }

    public function auth()
    {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['contraseña'];
        if ($_POST['usuario'] == "cristina" && $_POST['contraseña'] == '1234') {
            header('location:index.php?method=homeAdmin');
        } else {
            echo "Usario o contraseña incorrectos";
            header("location:views/login.php");
        }
    }
    public function logout()
    {
      session_destroy();
      header('Location: index.php?method=login');
    }
}