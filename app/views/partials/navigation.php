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