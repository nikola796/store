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

    public function index()
    {
        $all_collections = $this->category->all();
        return view('index', compact('all_collections'));
    }

    public function category($category)
    {
        $all_categories = $this->category->all([],['name'=>1,'categories.name'=>1,'categories.categories.name'=>1, '_id'=>0]);
        $category_from_db = $this->category->findFromDB($category);

        return view('category', compact('category_from_db', 'all_categories'));
    }

    public function subcategory($category, $subcategory)
    {
        $category_from_db = $this->category->find(['categories.categories.parent_category_id' => $category.'-'.$subcategory]);
        return view('subcategories', compact('category_from_db', 'category', 'subcategory'));
    }

}