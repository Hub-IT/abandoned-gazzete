<?php
/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
use database\migrations\CreateDatabase;

require __DIR__ . '/../../../vendor/autoload.php';

$database = new CreateDatabase();

$database->down();
