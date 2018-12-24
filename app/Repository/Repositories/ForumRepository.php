<?php


namespace App\Repository\Repositories;
use App\Repository\DataModels\Forum;
use App\Domains\DomainModels\DomainModel;

Class ForumRepository implements Repository{

	/**
     * Retrieve all data from Database with pagination default perpage = 5
     * @author Alvent
     *
     * @param Integer $perPage = 5
     * @return Collection of Illuminate\Database\Eloquent\Model
     */
    public function all($perPage = 5)
    {
        
    }

    /**
     * Retrieve data from Database with specified id
     * @author Alvent
     *
     * @return Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * Insert new model to Database
     * @author Alvent
     *
     * @param array $data
     * @return Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    /**
     * Update data with specified id inside Database with updated model
     * @author Alvent
     *
     * @param array $data
     * @return Boolean
     */
    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete data with specified id inside Database
     * @author Alvent
     *
     * @param Integer $id
     * @return Boolean
     */
    public function delete($id)
    {

    }


      /**
     * Get all message from specified user id
     * @author Alvent
     *
     * @param Integer $id
     * @return Boolean
     */
    public static function showForum($id){

    }


}



