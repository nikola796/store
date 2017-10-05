<div id="main-nav" class="stellarnav dark desktop">
    <ul>
        <?php foreach ($all_categories as $categories): ?>
            <li><a href="<?= url() . $categories['id'] ?>"><?= $categories['name'] ?></a>
                <ul>
                    <?php foreach ($categories['categories'] as $category): ?>
                        <li><a href="<?= url() . str_replace('-', '/', $category['id']) ?>"><?= $category['name'] ?></a>
                        <ul>
                            <?php foreach ($category['categories'] as $cat): ?>
                                <li><a href="<?= url() . str_replace('-', '/', $cat['id']) ?>"><?= $cat['name'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
        <?php endforeach; ?>
        <li><a href="">Dropdown</a>
            <ul>
                <li><a href="#">How deep?</a>
                    <ul>
                        <li><a href="#">Deep</a>
                            <ul>
                                <li><a href="#">Even deeper</a>
                                    <ul>
                                        <li>
                                        <li><a href="#">Item</a></li>
                                        </li>
                                        <li>
                                        <li><a href="#">Item</a></li>
                                        </li>
                                        <li>
                                        <li><a href="#">Item</a></li>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Here's a very long item. It can be as long as you want</a></li>
                <li><a href="#">Item</a></li>
            </ul>
        </li>
        <!--        <li><a href="">Item 2</a></li>-->
        <!--        <li><a href="">Item 3</a></li>-->
        <!--        <li><a href="">Item 4</a></li>-->
        <!--        <li><a href="">Item 5</a></li>-->
        <!--        <li><a href="">Item 6</a></li>-->
        <!--        <li class="drop-left"><a href="">Drop Left</a>-->
        <!--            <ul>-->
        <!--                <li><a href="#">How deep?</a>-->
        <!--                    <ul>-->
        <!--                        <li><a href="#">Deep</a>-->
        <!--                            <ul>-->
        <!--                                <li><a href="#">Even deeper</a>-->
        <!--                                    <ul>-->
        <!--                                        <li><li><a href="#">Item</a></li></li>-->
        <!--                                        <li><li><a href="#">Item</a></li></li>-->
        <!--                                        <li><li><a href="#">Item</a></li></li>-->
        <!--                                    </ul>-->
        <!--                                </li>-->
        <!--                                <li><a href="#">Item</a></li>-->
        <!--                                <li><a href="#">Item</a></li>-->
        <!--                                <li><a href="#">Item</a></li>-->
        <!--                            </ul>-->
        <!--                        </li>-->
        <!--                        <li><a href="#">Item</a></li>-->
        <!--                        <li><a href="#">Item</a></li>-->
        <!--                        <li><a href="#">Item</a></li>-->
        <!--                        <li><a href="#">Item</a></li>-->
        <!--                    </ul>-->
        <!--                </li>-->
        <!--                <li><a href="#">Item</a></li>-->
        <!--                <li><a href="#">Item</a></li>-->
        <!--                <li><a href="#">Item</a></li>-->
        <!--                <li><a href="#">Item</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
    </ul>
</div><!-- .stellar-nav -->

<div class="container">