<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();
$dotenv->required(['BASE_URL', 'DB_HOST', 'DB_NAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_PORT', 'PDO_ERROR_MODE'])->notEmpty();

$baseUrl = getenv('BASE_URL');

$mux = new \Pux\Mux;

$mux->get($baseUrl, ['Gazzete\Controllers\Consumer\WelcomeController', 'welcome']);
$mux->get("{$baseUrl}about", ['Gazzete\Controllers\Consumer\AboutController', 'about']);
$mux->get("{$baseUrl}categories", ['Gazzete\Controllers\Consumer\CategoriesController', 'index']);
$mux->get("{$baseUrl}dashboard", ['Gazzete\Controllers\Admin\DashboardController', 'dashboard']);

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

echo \Pux\Executor::execute($route);