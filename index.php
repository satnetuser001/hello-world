<?php

require __DIR__.'/vendor/autoload.php';

use App\Controllers\MainController;

$app = new MainController();
echo $app->index();