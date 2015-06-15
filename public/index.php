<?php require __DIR__ . '/../vendor/autoload.php';

use Pux\Executor;
use Pux\Mux;

$mux = new Mux;

$mux->get("/", ['Gazzete\Controllers\Consumer\WelcomeController', 'welcome']);
$mux->get("/admin", ['Gazzete\Controllers\Admin\DashboardController', 'dashboard']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo Executor::execute($route);