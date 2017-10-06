<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 05.10.2017
 * Time: 09:52 ч.
 */

namespace App\Models;


use MongoDB\Client;

class Product
{

    private $collection;

    public function __construct($db, $collection)
    {
        $this->collection = (new Client)->$db->$collection;
    }

    public function find($param = null)
    {

        ($param ? $cursor = $this->collection->find($param): $cursor = $this->collection->find());

        return $cursor;
    }

    public function findOne($param)
    {

        $cursor = $this->collection->findOne($param);
        return $cursor;
    }
}