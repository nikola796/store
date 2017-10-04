<?php

foreach ($category_from_db as $document) {
    $sub_categories = $document['categories'];

}

foreach ($sub_categories as $sc){
    foreach ($sc['categories'] as $s)
        if($s['parent_category_id'] == $category.'-'.$subcategory){
            echo $s['name'].' => '.$s['parent_category_id'].'<br>';
        }

}

//dd($sub_categories[0]['categories']);

