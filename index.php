<?php

require __DIR__.'/vendor/autoload.php';

use App\Controllers\MainController;

$app = new MainController();
$app->index();