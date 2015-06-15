<?php require __DIR__ . '/../vendor/autoload.php';

use Pux\Executor;
use Pux\Mux;

$mux = new Mux;

$mux->get("/admin", ['Gazzete\Controllers\WelcomeController', 'adminFunction']);
$mux->get("/", ['Gazzete\Controllers\WelcomeController', 'antonyFunction']);

//$mux->get('/login', ['App\Controllers\AuthController', 'loginFunction']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo Executor::execute($route);