<?php
foreach ($products as $product){
    echo '<pre>' . print_r($product['name'], true) . '</pre>';
}