<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Build a Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php foreach ($all_collections as $document):?>
                <li class="nav-item" style="border:1px solid red;border-radius: 20px;margin-left: 20%;text-align: center">
                    <a style="text-align: center" class="nav-link" href="<?= url(). strtolower($document['name'])?>"><?= $document['name']?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>

<!--<li class="nav-item active">-->
<!--    <a class="nav-link" href="#">--><?//= $document['name']?>
<!--        <span class="sr-only">(current)</span>-->
<!--    </a>-->
<!--</li>-->
