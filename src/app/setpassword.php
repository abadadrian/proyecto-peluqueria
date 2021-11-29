<?php
use App\Models\Worker;
require "app/models/Worker.php";

$workers = Worker::all();

foreach ($workers as $worker) {
    //echo $worker->name . "\n";
    echo $worker->name . ': ' . $worker->setPassword('secret') . "\n";

}