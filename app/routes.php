<?php

$router->get('', array('App\Controllers\PagesController', 'index'));

$router->get('home', array('App\Controllers\PagesController', 'home'));

$router->get('stella', array('App\Controllers\PagesController', 'stella'));

$router->get('{category}', array('App\Controllers\CategoriesController', 'category'));

$router->get('{category}/{subcategory}', array('App\Controllers\CategoriesController', 'subcategory'));

$router->get('{category}/{subcategory}/{products_parent}', array('App\Controllers\ProductsController', 'index'));





