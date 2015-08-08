<?php namespace Gazzete\Models\Repositories\Categories\Db;

use database\migrations\CreateCategoriesTable;
use Exception;
use Gazzete\Models\Repositories\MySqlDatabase;
use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class MySqlDbCategoryRepository extends MySqlDatabase implements RawDbCategoryRepository
{

	public function getAll()
	{
		$query = "SELECT `" . CreateCategoriesTable::$columnPrimaryKey . "`, " .
			"`" . CreateCategoriesTable::$columnName . "`, `" . CreateCategoriesTable::$columnExtImg . "`" .
			"FROM `" . $this->credentialsLoader->getDbName() . "`.`" . CreateCategoriesTable::$tableName . "`";

		if ( $query = $this->getConnection()->query($query) )
		{
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		throw new Exception("Could not retrieve data from database.");
	}
}