<?php
/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
use database\migrations\CreateDatabase;

require __DIR__ . '/../../../vendor/autoload.php';

$database = new CreateDatabase();

$database->up();

