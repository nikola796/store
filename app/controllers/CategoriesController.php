<?php
namespace App\Controllers;
use App\Models\Category;

/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 28.09.2017
 * Time: 09:32 ч.
 */

class CategoriesController
{
    private $category;


    public function __construct()
    {
        $this->category = new Category('store', 'categories');
    }

    /**
     * Load categories
     * @param $root_category
     * @return mixed
     * @internal param $category
     */
    public function category($root_category)
    {

        $category_from_db = $this->category->findFromDB($root_category);

        return view('category', compact('category_from_db', 'root_category'));
    }

    /**
     * LOAD SUBCATEGORIES
     * @param $root_category
     * @param $subcategory
     * @return mixed
     * @internal param $category
     */
    public function subcategory($root_category, $subcategory)
    {
        $category_from_db = $this->category->find(['categories.categories.parent_category_id' => $root_category.'-'.$subcategory]);
        return view('subcategories', compact('category_from_db', 'root_category', 'subcategory'));
    }

}