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

        if (count($category_from_db) == 0) {
            return view(404);
        }

        foreach ($category_from_db['categories'] as $document) {
            $sub_categories[] = $document;
        }


        return view('category', compact('category_from_db', 'root_category', 'sub_categories'));
    }

    /**
     * LOAD SUBCATEGORIES IF NO RESU
     * @param $root_category
     * @param $subcategory
     * @return mixed
     * @internal param $category
     */
    public function subcategory($root_category, $subcategory)
    {
        $category_from_db = $this->category->find(['categories.categories.parent_category_id' => $root_category . '-' . $subcategory]);

        if (count($category_from_db) == 0) {
            return view(404);
        }

        foreach ($category_from_db as $document) {
            $sub_cats = $document['categories'];


        }

        foreach ($sub_cats as $sc){
            foreach ($sc['categories'] as $s)
                if($s['parent_category_id'] == $root_category.'-'.$subcategory){
                    $category_selected[] = $s;
                }
            if($sc['name'] == ucfirst($subcategory)){
                $parent_category_data = $sc;
            }
        }

        return view('subcategories', compact('parent_category_data','category_selected', 'category_from_db', 'root_category', 'subcategory'));
    }

}