<?php namespace database\seeds;

use database\migrations\CreateRolesTable;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class RolesSeeder extends Seeder {

	public function run()
	{
		foreach (range(0, 5) as $index)
		{
			$this->db->getConnection()
				->prepare(
					"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateRolesTable::$tableName .
					"` (`" . CreateRolesTable::$columnName . "`) VALUES ('" . $this->faker->unique()->word() . "')")
				->execute();

		}

		echo "Seed for '" . CreateRolesTable::$tableName . "' table complete.\n";
	}
}