<?php
//echo 'root -> '.$root_category .' // subcategory -> '.$subcategory.' // product parent -> '.$product_parent.' //'. $parent;//die();
//dd($subcategory);
foreach ($parent_data['categories'] as $pk) {
    if ($pk['id'] == $root_category . '-' . $subcategory) {
        foreach ($pk['categories'] as $p) {
            if ($p['id'] == $parent OR $p['id'] == $product_parent) {
                $ddd = $p;
            }
        }
    }
 //   echo '<pre>' . print_r($pk, true) . '</pre>';die();
}

//echo '<pre>' . print_r($parent_data, true) . '</pre>';die();
?>
<?php include('partials/header.php') ?>

<div class="row text-center">
    <div class="col-12">
        <!-- Jumbotron Header -->
        <header class="jumbotron">
            <h3 class=""><?= $ddd['page_title'] ?></h3>
            <p><?= $ddd['page_description'] ?></p>
        </header>
    </div>
</div>
<!-- Page Features -->
<div class="row text-center">
    <?php foreach ($pr as $p): ?>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?= $p['name'] ?></h4>
                    <p class="card-text"><?= $p['short_description'] ?></p>
                </div>
                <div class="card-footer">
                    <p class="card-text"><strong>Pirce: <?= $p['price'] ?> <?= $p['currency'] ?></strong></p>
                    <a href="<?= url() . str_replace('-', '/', $parent) ?>/<?= $p['id'] ?>" class="btn btn-primary">More
                        Info!</a>
                </div>
            </div>
        </div>

    <?php endforeach ?>

</div>
<!-- /.row -->

<?php include('partials/footer.php') ?>


