<?php require __DIR__ . '/../vendor/autoload.php';

use Pux\Executor;
use Pux\Mux;

$mux = new Mux;

$mux->get("/", ['Gazzete\Controllers\WelcomeController', 'welcome']);


$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo Executor::execute($route);