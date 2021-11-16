
<?php
use App\Models\Service;
require_once "app/models/Service.php";

class ServicesController
{
    public function index()
    {
        //buscar datos
        $users = Service::all();
        //pasar a la vista
        require('app/views/user/index.php');
    }
}
