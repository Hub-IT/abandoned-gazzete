<?php namespace database\migrations;
/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class Database {

	/**
	 * Run the migrations
	 */
	public static function up()
	{
		// drop database if exists
		// create database

		CreateArticlesTable::up();

		echo "Database migration complete.\n";
	}
}


