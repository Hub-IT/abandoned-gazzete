<?php namespace database\seeds;

use database\migrations\CreateCategoriesTable;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class CategoriesSeeder extends Seeder {

	public function run()
	{
		foreach (range(0, 5) as $index)
		{
			$this->db->getConnection()
				->query(
					"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateCategoriesTable::$tableName . "`" .
					" (`" . CreateCategoriesTable::$columnName . "`, `" . CreateCategoriesTable::$columnExtImg . "`) " .
					"VALUES ('" . $this->faker->unique()->word() . "', '" . $this->faker->imageUrl() . "')");

		}

		echo "Seed for '" . CreateCategoriesTable::$tableName . "' table complete.\n";
	}
}