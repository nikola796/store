<?php

namespace App\Models;

/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 28.09.2017
 * Time: 09:32 ч.
 */

use MongoDB\Client;

class Category
{
    
    private $collection;

    public function __construct($db, $collection)
    {
        $this->collection = (new Client)->$db->$collection;
    }

    /**
     * @param null $param
     * @return mixed
     */
    public function all($param = null)
    {
        ($param ? $cursor = $this->collection->find($param): $cursor = $this->collection->find());
        //return $collection = (new Client)->test->users;
        //$cursor = $this->collection->find();
        return $cursor;
    }

    public function find($param = null)
    {
        //return $collection = (new Client)->test->users;
        ($param ? $cursor = $this->collection->find($param): $cursor = $this->collection->find());

        return $cursor;
    }

    public function findOne($param)
    {
        //return $collection = (new Client)->test->users;
        $cursor = $this->collection->findOne($param);
        return $cursor;
    }

    public function findFromDB($category)
    {
        //return $collection = (new Client)->test->users;
        $cursor = $this->collection->findOne(['name' => ucfirst($category)]);
        return $cursor;
    }

}