<?php

$router->get('', array('App\Controllers\PagesController', 'home'));

$router->get('{category}', array('App\Controllers\CategoriesController', 'category'));



