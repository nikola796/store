<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Andreev
 * Date: 05.10.2017
 * Time: 09:46 ч.
 */

namespace App\Controllers;


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
        $parent = $category.'-'.$subcategory.'-'.$product_parent;

        $products = $this->product->find(['primary_category_id' => $parent]);

        return view('products', compact('products'));
    }

}