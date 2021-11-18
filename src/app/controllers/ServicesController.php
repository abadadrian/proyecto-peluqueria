
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
        require ('app/views/user/create-services.php');
    }

    public function store()
    {
        $service = new Service();
        $service->name = $_REQUEST['name'];
        $service->precio = $_REQUEST['precio'];
        $service->tiempo = $_REQUEST['precio'];
        $service->email = $_REQUEST['email'];
        $service->insert();
        header('Location:/service');
    }
}
