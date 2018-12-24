<?php

namespace App\Domains\DomainModels;
use App\Repository\Repositories\ForumRepository;

Class ForumDomainModel extends DomainModel{
	protected $id; 
	protected $userId;
	protected $categoryId; 
	protected $forum_status_id; 
	protected $title; 
	protected $description; 

	/**
     * Properties GETTER
     * @author Alvent
     */

	public function getId(){ return $this->id; }
	public function getUserId(){ return $this->userId; }
	public function getCategoryId(){ return $this->categoryId; }
	public function getForumStatusId(){ return $this->forum_status_id; }
	public function getTitle(){ return $this->title; }
	public function getDescription(){ return $this->description; }

	/**
     * Properties SETTER 
     * @author Alvent 
     */

	protected function setId($id){ $this->id = $id; return $this; }
	protected function setUserId($id){ $this->userId = $id; return $this; }
	protected function setCategoryId($id){ $this->categoryId = $id; return $this; }
	protected function setForumStatusId($id){ $this->forum_status_id = $id; return $this; }
	protected function setTitle($title){ $this->title = $title; return $this; }
	protected function setDescription($description){ $this->description = $description; return $this; }

	/**
     * Add new Forum to the database
     * @author Alvent
     *
     * @return App\Repository\DataModels\Forum
     */
    public function addForum()
    {

    }

    /**
     * Factory Method to create ForumDomainModel from array of Data
     * @author Alvent
     *
     * @param array $data
     * @return ForumDomainModel
     */
     public static function createForumFromArray(array $data)
    {

    }

	/**
     * Factory Method to create ForumDomainModel from model
     * @author Alvent
     *
     * @param Repository/DataModels/Forum $model
     * @return ForumDomainModel
     */
    public static function createForumFromForumDataModel(Forum $model)
    {

    }

    /**
    * Show all Forum created by specified user id
    * @author Alvent
    * @param $id
	* @return  Collection of Repository/DataModels/Forum
	*/

    public static function showForum($id){

    }

    /**
    * Delete Forum from db with specified Id 
    * @author Alvent 
    * @param Integer $id
    */

    public static function deleteForum($id){

    }

    /**
	* Show all forum in DB with pagination 5     
	* @author Alvent 
	* @param Integer $perPage
	* @return Collection of Repository/DataModels/Forum
	*/

    public static function showAllForum($perPage){
    	
    }



}


