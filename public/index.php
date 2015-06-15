<?php

require __DIR__ . '/../vendor/autoload.php';

$mux = new \Pux\Mux;

$mux->get("/", ['Gazzete\Controllers\Consumer\WelcomeController', 'welcome']);
$mux->get("/categories", ['Gazzete\Controllers\Consumer\CategoriesController', 'index']);

$mux->get("/dashboard", ['Gazzete\Controllers\Admin\DashboardController', 'dashboard']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo \Pux\Executor::execute($route);