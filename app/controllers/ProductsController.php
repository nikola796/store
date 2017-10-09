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
     * @param $root_category
     * @param $subcategory
     * @param $product_parent
     * @return mixed
     * @internal param $category
     */
    public function index($root_category, $subcategory, $product_parent)
    {
        $cat = new Category('store', 'categories');

        $parent = $root_category . '/' . $subcategory . '/' . $product_parent;

        $parent_data = $cat->findOne(['categories.categories.id' => str_replace('/', '-', $parent)], ['']);
       
        // IN DATABASE HAVE CATEGORY WITH DIFFERENT STRUCTURE. THAT IS THE REASON TO DO THIS CHECK!
        if(count($parent_data) == 0){
            $parent_data = $cat->findOne(['categories.categories.id' => $product_parent], ['']);
        }

        $products = $this->product->find(['primary_category_id' => str_replace('/', '-', $parent)]);

        $product_array = $products->toArray();
        
        // IN DATABASE HAVE CATEGORY WITH DIFFERENT STRUCTURE. THAT IS THE REASON TO DO THIS CHECK!
        if (count($product_array) == 0)
        {
            $products = $this->product->find(['primary_category_id' => $product_parent]);
            $product_array = $products->toArray();
        }

        $categoryData = $this->getCategoryData($parent_data, $root_category, $subcategory, $parent, $product_parent);
        
        return view('products', compact('categoryData','parent', 'product_array'));
    }

    /** Get data for category of product
     * @param $parent_data
     * @param $root_category
     * @param $subcategory
     * @param $parent
     * @param $product_parent
     * @return mixed
     */
    private function getCategoryData($parent_data, $root_category, $subcategory, $parent, $product_parent)
    {
        foreach ($parent_data['categories'] as $pk) {
            if ($pk['id'] == $root_category . '-' . $subcategory) {
                foreach ($pk['categories'] as $p) {
                    if ($p['id'] == str_replace('/', '-', $parent) OR $p['id'] == $product_parent) {
                        $categoryData = $p;
                    }
                }
            }
        }

        return $categoryData;
    }

    /** GET SELECTED PRODUCT
     * @param $root_category
     * @param $subcategory
     * @param $product_parent
     * @param $product_id
     * @return mixed
     * @internal param $category
     * @internal param $products_parent
     */
    public function show($root_category, $subcategory, $product_parent, $product_id)
    {
        $parent = $root_category . '-' . $subcategory . '-' . $product_parent;
        $product = $this->product->findOne(['id' => $product_id]);
//dd($product);
        return view('show', compact('parent','product', 'root_category', 'subcategory', 'product_parent', 'product_id'));

    }

}