<div class="main">
    <nav id="cbp-hrmenu" class="cbp-hrmenu">
        <ul>
            <?php foreach ($all_categories as $categories): ?>
                <li><a href="<?= mb_strtolower($categories['name']) ?>"><?= $categories['name'] ?></a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">

                            <?php foreach ($categories['categories'] as $category): ?>
                                <div>
                                    <h4><a href="<?= mb_strtolower($category['name']) ?>"><?= $category['name'] ?></a></h4>
                                    <ul>
                                        <?php foreach ($category['categories'] as $cat): ?>
                                            <li><a href="<?= mb_strtolower($cat['name']) ?>"><?= $cat['name'] ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>


