<?php
namespace App\Controllers;
class HomeController
{
    public function index()
    {
        require "app/views/homeAdmin.php";
    }
}