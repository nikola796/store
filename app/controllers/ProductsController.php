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

class ProductsController {
    private $product;


    public function __construct()
    {
        $this->product = new Product('store', 'products');
    }

    /**
     * GET ALL PRODUCTS FOR CATEGORY
     * @param $category
     * @param $subcategory
     * @param $product_parent
     * @return mixed
     */
    public function index($root_category, $subcategory, $product_parent)
    {
        $cat = new Category('store', 'categories');

        $parent = $root_category . '-' . $subcategory . '-' . $product_parent;

        $parent_data = $cat->findOne(['categories.categories.id' => $parent], ['']);

        $products = $this->product->find(['primary_category_id' => $parent]);

        $pr = $products->toArray();
        if (count($pr) == 0)
        {
            $products = $this->product->find(['primary_category_id' => $product_parent]);
            $pr = $products->toArray();
        }

        return view('products', compact('parent', 'root_category', 'subcategory', 'product_parent', 'products', 'pr', 'all_categories', 'parent_data', 'pd'));
    }

    /** GET SELECTED PRODUCT
     * @param $category
     * @param $subcategory
     * @param $products_parent
     * @param $product_id
     * @return mixed
     */
    public function show($category, $subcategory, $products_parent, $product_id)
    {
        $product = $this->product->findOne(['id' => $product_id]);

        return view('show', compact('product'));

    }

}