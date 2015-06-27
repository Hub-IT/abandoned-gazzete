<?php namespace database\seeds;

use database\migrations\CreateCategoriesTable;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class CategoriesSeeder extends Seeder {

	public function run()
	{
		foreach (range(0, 13) as $index)
		{
			$name = ucwords($this->faker->unique()->word());

			$this->db->getConnection()
				->query(
					"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateCategoriesTable::$tableName . "`" .
					" (`" . CreateCategoriesTable::$columnName . "`, `" . CreateCategoriesTable::$columnExtImg . "`) " .
					"VALUES ('$name', '" . $this->faker->imageUrl(177, 298) . "')");

		}

		echo "Seed for '" . CreateCategoriesTable::$tableName . "' table complete.\n";
	}
}