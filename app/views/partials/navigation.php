<?php $all_categories = \App\Models\Category::navigation(); ?>
<div class="clearfix"><a style="color:#333;margin: 1% 1%" href="#" class="pull-left"><h3>Store Logo</h3></a></div>

<div id="main-nav" class="stellarnav dark desktop">

    <ul>

        <?php foreach ($all_categories as $categories): ?>
            <li><a href="<?= url() . $categories['id'] ?>"><?= $categories['name'] ?></a>
                <ul>
                    <?php foreach ($categories['categories'] as $category): ?>
                        <li>
                            <a href="<?= url() . str_replace('-', '/', $category['parent_category_id']) . '/' . str_replace($category['parent_category_id'] . '-', '', $category['id']) ?>"><?= $category['name'] ?></a>
                            <ul>
                                <?php foreach ($category['categories'] as $cat): ?>
                                    <li>
                                        <a href="<?= url() . str_replace('-', '/', $cat['parent_category_id']) . '/' . str_replace($cat['parent_category_id'] . '-', '', $cat['id']) ?>"><?= $cat['name'] ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>


</div><!-- .stellar-nav -->


<div class="container">
    <div class="row" style="margin:2%">
        <div class="col-12"><?= (isset($root_category) ? (isset($subcategory) ? (isset($product_parent) ? (isset($product_id) ? '<a href="' . url() . '">Home</a> / <a href="' . url() . $root_category . '">' . ucfirst($root_category) . '</a> / <a href="' . url() . $root_category . DIRECTORY_SEPARATOR . $subcategory . '">' . ucfirst($subcategory) . '</a> / <a href="' . url() . $root_category . DIRECTORY_SEPARATOR . $subcategory . DIRECTORY_SEPARATOR . $product_parent . '">' . ucfirst($product_parent) . '</a> / ' . $product['name'] : '<a href="' . url() . '">Home</a> / <a href="' . url() . $root_category . '">' . ucfirst($root_category) . '</a> / <a href="' . url() . $root_category . DIRECTORY_SEPARATOR . $subcategory . '">' . ucfirst($subcategory) . '</a> /' . ucfirst($product_parent)) : '<a href="' . url() . '">Home</a> / <a href="' . url() . $root_category . '">' . ucfirst($root_category) . '</a> / ' . ucfirst($subcategory)) : '<a href="' . url() . '">Home</a> / ' . ucfirst($root_category)) : 'Home') ?></div>
    </div>

