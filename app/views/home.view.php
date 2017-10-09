<?php require('partials/header.php'); ?>

<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    <h3 class="">Build Store Task</h3>
    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
        possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
        repellat.</p>
</header>
<!-- END Jumbotron Header -->

<!-- Page Features -->
<div class="row" style="margin: 2% auto">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card">
            <a href="<?= url() ?>womens">
                <img class="card-img-top"
                     src="http://row.jimmychoo.com/on/demandware.static/-/Library-Sites-jch-shared-general/default/dwe2ca918a/2017/homepage/wk38/gbrow/HP-UK-WW-hero@2x.jpeg"
                     alt="">
            </a>
            <div class="card-body">
                <h4 class="card-title"><a href="<?= url() ?>womens">Womens</a></h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                    necessitatibus neque.</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <a href="<?= url() ?>mens">
                <img class="card-img-top"
                     src="http://row.jimmychoo.com/on/demandware.static/-/Library-Sites-jch-shared-general/default/dwc1c9e970/2017/homepage/wk28/UK/HP-UK-MW-1@2x.jpeg"
                     alt="">
            </a>
            <div class="card-body">
                <h4 class="card-title"><a href="<?= url() ?>mens">Mens</a></h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                    necessitatibus neque.</p>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>

</div>
<!-- End Page Features -->
<?php require('partials/footer.php') ?>
