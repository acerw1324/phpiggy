<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;

echo HomeController::class;

$app = new App();

$app->get('/', ['App\Controllers\HomeController', 'home']);

dd($app);

return $app;
