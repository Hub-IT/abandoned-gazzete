<?php namespace database\seeds;

use database\migrations\CreateRolesTable;
use database\migrations\CreateUsersTable;
use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class UsersSeeder extends Seeder {

	public function run()
	{
		$roleIds = $this->db->getConnection()
			->query("SELECT `" . CreateRolesTable::$columnPrimaryKey . "` " .
				"FROM `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateRolesTable::$tableName . "`")
			->fetchAll(PDO::FETCH_COLUMN);

		foreach (range(0, 13) as $index)
		{
			$this->db->getConnection()
				->prepare(
					"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateUsersTable::$tableName .
					"` (`" . CreateUsersTable::$columnName . "`, `" . CreateUsersTable::$columnEmail . "`,
					 `" . CreateUsersTable::$columnForeignRoleId . "`) " .
					"VALUES ('" . $this->faker->name() . "', '" . $this->faker->email() . "',
					'" . $this->faker->randomElement($roleIds) . "')")
				->execute();

		}

		echo "Seed for '" . CreateUsersTable::$tableName . "' table complete.\n";
	}
}