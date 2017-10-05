
<?php

foreach ($category_from_db['categories'] as $document) {
   $sub_categories[] = $document;
}
?>
<?php require('partials/header.php') ?>
<!-- Page Content -->


    <!-- Jumbotron Header -->
 <header class="jumbotron my-4">
       <h4 class="display-6"><?= $category_from_db['page_title']?></h4>
       <p class="lead"><?= $category_from_db['page_description']?></p>
    </header>

    <header class="jumbotron my-4" style="background: #fff;">

        <?php foreach ($sub_categories as $sub_category):?>

        <div class="row" style="margin-bottom: 1%;">

            <div class="card-body">
                <h4 class="card-title"><?= $sub_category['name'] ?></h4>
                    <img style="margin-bottom:2%" class="card-img-top" src="http://placehold.it/500x125" alt="">

                        <h6 class="card-title"><?= $sub_category['page_title'] ?></h6>
                        <p class="card-text" style="text-align: justify"><?= $sub_category['page_description'] ?></p>



                    <a href="<?=url().str_replace('-', '/', $sub_category['id'])?>" class="btn btn-default products"  style="float: left;border:1px solid #444;border-radius: 20px;background: #ccc;color: #333"><?= $sub_category['name'] ?> Categories</a>



            </div>

        </div>
            <hr style="margin-top:2%" />
        <?php endforeach;?>
    </header>
    <!-- Page Features -->
   <!-- <div class="row text-center" style="border: 1px solid red">

        <div class="col-lg-10 col-md-6 mb-4" style="border: 1px solid green">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

    </div> -->
    <!-- /.row -->

</div>
<!-- /.container -->

<?php require('partials/footer.php') ?>




