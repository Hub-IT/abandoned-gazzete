<?php namespace Gazzete\Models;

use database\migrations\CreateCategoriesTable;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class Category {

	private $id;
	private $name;
	private $extImg;

	public function __construct( $data )
	{
		$this->setId($data[ CreateCategoriesTable::$columnPrimaryKey ]);
		$this->setName($data[ CreateCategoriesTable::$columnName ]);
		$this->setExtImg($data[ CreateCategoriesTable::$columnExtImg ]);
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getExtImg()
	{
		return $this->extImg;
	}

	/**
	 * @param mixed $extImg
	 */
	public function setExtImg( $extImg )
	{
		$this->extImg = $extImg;
	}
}