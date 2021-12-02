<?php

namespace App\Controllers;

use App\Models\Photo;

class PhotosController
{

    public function index()
    {
        require('app/views/admin/photos/index-photos.php');
    }

    public function upload()
    {
        $name = $_REQUEST['name'];
        $archivoSubido = $_FILES['photo'];
        
        $photo = new Photo();
        $photo->name = $name;
        $photo->path = $
        $image = $_FILES['photo']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $photo->path = $imgContent;
        $photo->insert();


        // // crear una photo
        // //recoger la photo del formulario
        // //recoger el nombre del archivo
        // //lo envias al metodo del modelo photo donde le pasas la foto y lo metes en la base de datos
        // require_once 'photos';
    }
}
