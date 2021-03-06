<?php

namespace App\Controllers;

use App\Models\Worker;
use App\Models\Service;

class WorkersController
{
    public function index()
    {
        //buscar datos
        $workers = Worker::all();
        //pasar a la vista
        require('app/views/admin/workers/index-workers.php');
    }

    public function create()
    {
        $services = Service::all();
        require('app/views/admin/workers/create-workers.php');
    }

    public function home(){
        $workers = Worker::all();
        require('app/views/team.php');
    }

    public function store()
    {
        $worker = new Worker();
        $worker->name = $_REQUEST['name'];
        $worker->surname = $_REQUEST['surname'];
        $worker->email = $_REQUEST['email'];
        $worker->details = $_REQUEST['details'];
        $worker->birthdate = $_REQUEST['birthdate'];
        $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
        $worker->password = $password;
        $worker->insert();

        header('Location: /workers');
    }

    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $worker = Worker::find($id);
        $services = Service::all();

        require('app/views/admin/workers/show-workers.php');
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $worker = Worker::find($id);
        $services = Service::all();
        require 'app/views/admin/workers/edit-workers.php';
    }


    public function update()
    {
        $id = $_REQUEST['id'];
        $worker = Worker::find($id);
        $worker->name = $_REQUEST['name'];
        $worker->surname = $_REQUEST['surname'];
        $worker->email = $_REQUEST['email'];
        $worker->details = $_REQUEST['details'];
        $worker->birthdate = $_REQUEST['birthdate'];
        $worker->save();
        header('Location:/workers');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $worker = Worker::find($id);
        $worker->delete();
        header('Location:/workers');
    }

    public function volverHomeAdmin()
    {
        require 'app/views/homeAdmin.php';
    }
}
