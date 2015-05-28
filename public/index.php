<?php require __DIR__ . '/../vendor/autoload.php';

use Pux\Executor;
use Pux\Mux;

$mux = new Mux;
$baseURL = '/MVC/public';

$mux->get("$baseURL/", ['App\Controllers\WelcomeController', 'antonyFunction']);
//$mux->get('/login', ['App\Controllers\AuthController', 'loginFunction']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo Executor::execute($route);