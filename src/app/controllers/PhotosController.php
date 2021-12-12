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
        $nombreArchivo = $_FILES['photo']['name'];

        $photo = new Photo();
        $photo->name = $name;
        $photo->path = $nombreArchivo;

        $photo->insert();

        // Subida del archivo
        $image = $_FILES['photo']['tmp_name'];
        $rutaSubida = './photos/' . $nombreArchivo;

        move_uploaded_file($image, $rutaSubida);

        //Aquí lo redirigirá de nuevo a la misma vista en la que estaba
        header('Location: /photos/index ');
    }

    public function show(){

        //Este método llamará al all y luego mostrará la vista
        $photos = Photo::all();
        
        require('app/views/admin/photos/show-photos.php');
        
    }

    public function delete($arguments){

        $id = (int) $arguments[0];
        $photo = Photo::find($id);
        $photo->delete();
        header('Location:/photos/show');
        
    }
}
