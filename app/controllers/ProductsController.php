<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 05.10.2017
 * Time: 09:46 ч.
 */

namespace App\Controllers;


use App\Models\Category;
use App\Models\Product;

class ProductsController
{
    private $product;


    public function __construct()
    {
        $this->product = new Product('store', 'products');
    }

    public function index($category,$subcategory,$product_parent)
    {
        $cat = new Category('store', 'categories');

        $all_categories = $cat->all([],['name' => 1, 'id'=>1,'categories.id'=>1, 'categories.name'=>1, 'categories.categories.id'=>1, 'categories.categories.name'=>1, '_id'=>0]);

        $parent = $category.'-'.$subcategory.'-'.$product_parent;

        $parent_data = $cat->findOne(['categories.categories.id' => $parent],['']);



        $products = $this->product->find(['primary_category_id' => $parent]);

        $pr = $products->toArray();
        if(count($pr) == 0){
            $products = $this->product->find(['primary_category_id' => $product_parent]);
            $pr = $products->toArray();
        }
        //$cnt = $this->product->count(['primary_category_id' => $parent]);

        return view('products', compact('parent','category','subcategory','product_parent','products', 'pr', 'all_categories', 'parent_data','pd'));
    }

    public function show($category, $subcategory, $products_parent, $product_id)
    {
        $product = $this->product->findOne(['id' => $product_id]);

        return view('show', compact('product'));

    }

}