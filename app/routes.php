<?php

$router->get('', array('App\Controllers\PagesController', 'index'));

$router->get('home', array('App\Controllers\PagesController', 'home'));

$router->get('{category}', array('App\Controllers\CategoriesController', 'category'));



