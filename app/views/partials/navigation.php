<?php $all_categories = \App\Models\Category::navigation();?>
<div id="main-nav" class="stellarnav dark desktop">
    <ul>
        <?php foreach ($all_categories as $categories): ?>
            <li><a href="<?= url() . $categories['id'] ?>"><?= $categories['name'] ?></a>
                <ul>
                    <?php foreach ($categories['categories'] as $category): ?>
                        <li><a href="<?=url().str_replace('-', '/', $category['parent_category_id']) .'/'.str_replace($category['parent_category_id'].'-', '', $category['id'])?>"><?= $category['name'] ?></a>
                            <ul>
                                <?php foreach ($category['categories'] as $cat): ?>
                                    <li>
                                        <a href="<?=url().str_replace('-', '/', $cat['parent_category_id']) .'/'.str_replace($cat['parent_category_id'].'-', '', $cat['id'])?>"><?= $cat['name'] ?></a>
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
    <div><?=(isset($root_category) ? (isset($subcategory) ? (isset($product_parent) ? '<a href="'.url().'">Home</a> / <a href="'.url().$root_category.'">'. ucfirst($root_category).'</a> / <a href="'.url().$root_category.DIRECTORY_SEPARATOR.$subcategory.'">'.ucfirst($subcategory).'</a> /'.ucfirst($product_parent) : '<a href="'.url().'">Home</a> / <a href="'.url().$root_category.'">'. ucfirst($root_category).'</a> / '.ucfirst($subcategory)) : '<a href="'.url().'">Home</a> / '. ucfirst($root_category)) : 'Home')?></div>