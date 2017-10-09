<?php require('partials/header.php') ?>
<!-- Page Content -->

<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    <h3 class=""><?= $category_from_db['page_title'] ?></h3>
    <p><?= $category_from_db['page_description'] ?></p>
</header>

<header class="jumbotron my-4" style="background: #fff;">

    <?php foreach ($sub_categories as $sub_category): ?>

        <div class="row" style="margin-bottom: 1%;">

            <div class="card-body">
                <h4 class="card-title"><?= $sub_category['name'] ?></h4>
                <a href="<?= url() . str_replace('-', '/', $sub_category['id']) ?>">
                    <img style="margin-bottom:2%" class="card-img-top"
                         src="<?= url() ?>public/images/<?= $sub_category['id'] ?>.jpg" alt="">
                </a>
                <h6 class="card-title"><?= $sub_category['page_title'] ?></h6>
                <p class="card-text" style="text-align: justify"><?= $sub_category['page_description'] ?></p>


                <a href="<?= url() . str_replace('-', '/', $sub_category['id']) ?>" class="btn btn-default products"
                   style="float: left;border:1px solid #444;border-radius: 20px;background: #ccc;color: #333"><?= $sub_category['name'] ?>
                    Categories</a>


            </div>

        </div>
        <hr style="margin-top:2%"/>
    <?php endforeach; ?>
</header>

</div>
<!-- /.container -->

<?php require('partials/footer.php') ?>




