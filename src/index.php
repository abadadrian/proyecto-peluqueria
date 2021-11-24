<?php
if ($_ENV['APP_ENV'] !== 'dev')
    require '../vendor/autoload.php';
else require '/var/www/vendor/autoload.php';

require_once "core/App.php";

use Core\App;

$app = new App;
