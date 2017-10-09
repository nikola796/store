<?php

namespace App\Models;

/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 28.09.2017
 * Time: 09:32 ч.
 */

use MongoDB\Client;

class Category {

    private $collection;

    public function __construct($db, $collection)
    {
        $this->collection = (new Client)->$db->$collection;
    }

    public static function navigation()
    {
        $collection = (new Client)->store->categories;
        $all_categories = $collection->find([], ['name' => 1, 'categories.name' => 1, 'categories.categories.name' => 1, '_id' => 0]);

        return $all_categories;
    }


    /**
     * Get all records from database
     * @return \MongoDB\Driver\Cursor
     */
    public function all()
    {
        $cursor = $this->collection->find([]);

        return $cursor;
    }

    /** Find records from database with option for adding parameters
     * @param null $param
     * @return \MongoDB\Driver\Cursor
     */
    public function find($param = null)
    {
        ($param ? $cursor = $this->collection->find($param) : $cursor = $this->collection->find());

        return $cursor;
    }

    /** Get One record from database
     * @param $param
     * @return array|null|object
     */
    public function findOne($param)
    {
        $cursor = $this->collection->findOne($param);

        return $cursor;
    }

    /** Find one record from database for some category
     * @param $category
     * @return array|null|object
     */
    public function findFromDB($category)
    {
        $cursor = $this->collection->findOne(['name' => ucfirst($category)]);

        return $cursor;
    }

}