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
     * @return mixed
     */
    public function all()
    {
        //return $collection = (new Client)->test->users;
        $cursor = $this->collection->find();
        return $cursor;
    }

    public function findFromDB($category)
    {
        //return $collection = (new Client)->test->users;
        $cursor = $this->collection->findOne(['name' => ucfirst($category)]);
        return $cursor;
    }

}