<?php namespace database\seeds;

use database\migrations\CreateArticlesTable;
use database\migrations\CreateRolesTable;
use database\migrations\CreateUsersTable;
use database\migrations\Migration;
use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class ArticlesSeeder extends Seeder {

	public function run()
	{
		$roleIds = $this->db->getConnection()
			->query("SELECT `" . CreateRolesTable::$columnPrimaryKey . "` " .
				"FROM `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateRolesTable::$tableName . "`")
			->fetchAll(PDO::FETCH_COLUMN);

		$userIds = $this->db->getConnection()
			->query("SELECT `" . CreateUsersTable::$columnPrimaryKey . "` " .
				"FROM `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateUsersTable::$tableName . "`")
			->fetchAll(PDO::FETCH_COLUMN);

		foreach (range(0, 30) as $index)
		{
			$title = ucwords(implode(" ", $this->faker->words()));
			$registrarId = $this->faker->randomElement($userIds);
			$authorId = $this->faker->randomElement($userIds);
			$content = "<p>" . implode("</p><p>", $this->faker->paragraphs()) . "</p>";
			$authorName = $this->faker->name;
			$durationRead = $this->faker->numberBetween(0, 999);
			$createdAt = $this->faker->dateTime()->format(Migration::$columnCreatedAtFormat);
			$updatedAt = $this->faker->dateTime()->format(Migration::$columnUpdatAtFormat);

			$query =
				"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateArticlesTable::$tableName .
				"` (`" . CreateArticlesTable::$columnRegistrarId . "`, `" . CreateArticlesTable::$columnAuthorId . "`," .
				"`" . CreateArticlesTable::$columnTitle . "`, `" . CreateArticlesTable::$columnContent . "`," .
				"`" . CreateArticlesTable::$columnAuthorName . "`, `" . CreateArticlesTable::$columnDurationRead . "`, " .
				"`" . Migration::$columnCreatedAt . "`, `" . Migration::$columnUpdatedAt . "`) " .
				"VALUES ('$registrarId', '$authorId', '$title', '$content', '$authorName', '$durationRead', $createdAt, $updatedAt)";

//			var_dump($query);
//			exit;
			$this->db->getConnection()->query($query)->execute();

		}

		echo "Seed for '" . CreateArticlesTable::$tableName . "' table complete.\n";
	}
}