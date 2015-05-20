<?php
use Pux\Executor;
use Pux\Mux;

$mux = new Mux;

$mux->get('/', ['App\Controllers\WelcomeController', 'index']);



$route = $mux->dispatch($_SERVER['REQUEST_URI']);
echo Executor::execute($route);