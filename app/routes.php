<?php
$router->get('', array('App\Controllers\PagesController', 'home'));

$router->get('{category}', array('App\Controllers\CategoriesController', 'category'));

$router->get('{category}/{subcategory}', array('App\Controllers\CategoriesController', 'subcategory'));

$router->get('{category}/{subcategory}/{products_parent}', array('App\Controllers\ProductsController', 'index'));

$router->get('{category}/{subcategory}/{products_parent}/{product_id}', array('App\Controllers\ProductsController', 'show'));







