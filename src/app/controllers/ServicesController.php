
<?php
use App\Models\Service;
require_once "app/models/Service.php";

class ServicesController
{
    public function index()
    {
        //buscar datos
        $services = Service::all();
        //pasar a la vista
        require('app/views/admin/index-services.php');
    }

    public function add(){
        require ('app/views/admin/create-services.php');
    }

    public function store()
    {
        $service = new Service();
        var_dump($service);
        $service->name = $_REQUEST['name'];
        $service->precio = $_REQUEST['precio'];
        $service->tiempo = $_REQUEST['tiempo'];
        $service->insert();
        header('Location:/service');
    }

    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $service = Service::find($id);
        // var_dump($service);
        // exit();
        require('app/views/admin/show-services.php');        
    }   
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $service = Service::find($id);
        require 'app/views/admin/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $service = Service::find($id);
        $service->name = $_REQUEST['name'];
        $service->precio = $_REQUEST['precio'];
        $service->tiempo = $_REQUEST['tiempo'];
        $service->save();
        header('Location:/user');
    }
}
