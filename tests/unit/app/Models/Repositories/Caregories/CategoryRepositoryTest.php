<?php
namespace app\Models\Repositories\Caregories;

use Gazzete\Models\Repositories\Categories\DbCategoryRepository;
use Gazzete\Models\Repositories\Categories\MySqlDbCategoryRepository;

class CategoryRepositoryTest extends \PHPUnit_Framework_TestCase {
	protected function setUp()
	{
		$this->categoryRepository = new DbCategoryRepository(new MySqlDbCategoryRepository());
	}

	protected function tearDown()
	{
	}

	// tests
	public function test_returns_array_of_category_objects()
	{

		$this->assertEquals($expected, $this->categoryRepository()->getAll());
	}

}