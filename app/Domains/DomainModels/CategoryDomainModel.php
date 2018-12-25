<?php

namespace App\Domains\DomainModels;
use App\Repository\Repositories\CategoryRepository;

Class CategoryDomainModel extends DomainModel{
	protected $id; 
	protected $name; 

	/**
     * Properties GETTER
     * @author Alvent
     */

	public function getId(){ return $this->id; }
	public function getName(){ return $this->name; }

	/**
     * Properties SETTER 
     * @author Alvent 
     */

	public function setId($id){ $this->id = $id; return $this; }
	public function setName($name){ $this->name = $name; return $this; }

    /**
	* Show all category in DB     
	* @author Alvent 
	* @return Collection of Repository/DataModels/Category
	*/
	public static function showAllCategory(){
		$categoryRepository = new CategoryRepository();
		$categories = $categoryRepository->all();
		return $categories;
	}
}



