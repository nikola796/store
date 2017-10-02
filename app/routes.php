<?php

$router->get('', array('App\Controllers\CategoriesController', 'index'));

$router->get('{category}', array('App\Controllers\CategoriesController', 'category'));



