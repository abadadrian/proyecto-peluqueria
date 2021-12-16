<?php
namespace App\Controllers;
class HomeController
{
    public function index()
    {
        // echo "<p>En Index()</p>";
        require "app/views/homePagina.html";
    }

    public function style(){
        require('assets/index.html');
    }

    public function home(){
        header('Location:/');
    }

}

