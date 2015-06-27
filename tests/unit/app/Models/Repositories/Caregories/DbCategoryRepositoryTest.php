<?php
namespace app\Models\Repositories\Caregories;

use database\migrations\CreateCategoriesTable;
use Gazzete\Models\Category;
use Gazzete\Models\Repositories\Categories\DbCategoryRepository;
use Mockery;

class DbCategoryRepositoryTest extends \PHPUnit_Framework_TestCase {

	private $dbCategoryRepository;
	private $mysqlDbCategoryRepository;

	protected function setUp()
	{
		$this->mysqlDbCategoryRepository = Mockery::mock('Gazzete\Models\Repositories\Categories\Db\MySqlDbCategoryRepository');

		$this->dbCategoryRepository = new DbCategoryRepository($this->mysqlDbCategoryRepository);
	}

	protected function tearDown()
	{
	}

	// tests
	public function test_returns_array_of_category_objects()
	{
		$dummyCategory = [CreateCategoriesTable::$columnPrimaryKey => 'id-sample', CreateCategoriesTable::$columnName => 'name-sample',
		                  CreateCategoriesTable::$columnExtImg     => 'ext-img-sample'];

		$this->mysqlDbCategoryRepository->shouldReceive('getAll')->once()->andReturn([$dummyCategory]);

		$expected = [new Category($dummyCategory)];

		$this->assertEquals($expected, $this->dbCategoryRepository->getAll());
	}

}