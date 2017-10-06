<?php

foreach ($category_from_db as $document) {
    $sub_cats = $document['categories'];


}

foreach ($sub_cats as $sc){
    foreach ($sc['categories'] as $s)
        if($s['parent_category_id'] == $category.'-'.$subcategory){
            //$categories = $s['name']; // $s['parent_category_id']
            $cts[] = $s;
        }
if($sc['name'] == ucfirst($subcategory)){
    $ccc = $sc;
}
}

//echo $ccc['page_title'].'<br>';
//echo $ccc['page_description'];
//var_dump($subcategory);
//echo '<pre>' . print_r($ccc, true) . '</pre>';
//die();
?>
<?php require('partials/header.php') ?>
<!-- Page Content -->


<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    <h4 class="display-6"><?= $ccc['page_title']?></h4>
    <p class="lead"><?= $ccc['page_description']?></p>
</header>

<header class="jumbotron my-4" style="background: #fff;">
    <h4 class="display-6"><?php $ccc['page_title']?></h4>
    <p class="lead"><?php $ccc['page_description']?></p>
    <?php foreach ($cts as $sub_category):?>

        <div class="row" style="margin-bottom: 1%;">

            <div class="card-body">
                <h4 class="card-title"><?= $sub_category['name'] ?></h4>
                <img style="margin-bottom:2%" class="card-img-top" src="<?= url()?>public/images/<?= $sub_category['id'] ?>.jpg" alt="">

                <h6 class="card-title"><?= $sub_category['page_title'] ?></h6>
                <p class="card-text" style="text-align: justify"><?= $sub_category['page_description'] ?></p>



                <a href="<?=url().str_replace('-', '/', $sub_category['parent_category_id']) .'/'.str_replace($sub_category['parent_category_id'].'-', '', $sub_category['id'])?>" class="btn btn-default products"  style="float: left;border:1px solid #444;border-radius: 20px;background: #ccc;color: #333">View Products</a>



            </div>

        </div>
        <hr style="margin-top:2%" />
    <?php endforeach;?>
</header>

</div>
<!-- /.container -->

<?php require('partials/footer.php') ?>


