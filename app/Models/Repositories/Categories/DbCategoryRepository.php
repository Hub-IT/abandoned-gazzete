<?php namespace Gazzete\Models\Repositories\Categories;

use Gazzete\Models\Category;
use Gazzete\Models\Repositories\Categories\Db\RawDbCategoryRepository;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class DbCategoryRepository implements CategoryRepository {

	private $rawDbCategoryRepository;

	public function __construct( RawDbCategoryRepository $rawDbCategoryRepository )
	{
		$this->rawDbCategoryRepository = $rawDbCategoryRepository;
	}


	/**
	 * @return array of Category objects
	 */
	public function getAll()
	{
		$rawCategories = $this->rawDbCategoryRepository->getAll();

		$categories = [];

		foreach ($rawCategories as $category)
		{
			$categories[] = new Category($category);
		}

		return $categories;
	}
}