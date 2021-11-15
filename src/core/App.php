<?php

class App
{
    public function __construct(){

        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName=ucwords($controllerName)."Controller";;


        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }



        $file = "app/controllers/$controllerName" . ".php";

        if(file_exists($file)){
            require_once $file;
        } else{
            header ("HTTP/1.0 404 Not Found");
        }

        $controllerObject=new $controllerName;

        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }


    }

    
}