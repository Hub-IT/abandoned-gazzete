<?php
/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */

use database\migrations\CreateDatabase;
use database\seeds\DatabaseSeeder;

require __DIR__ . '/../../../vendor/autoload.php';

$databaseSeeder = new DatabaseSeeder();

$database = new CreateDatabase();

$database->down();
$database->up();

$databaseSeeder->run();
