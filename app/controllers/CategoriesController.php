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
        $all_collections = $this->category->all();
        $category_from_db = $this->category->findFromDB($category);

        return view('category', compact('category_from_db', 'all_collections'));
    }

}