<?php
//echo $product['name'];
//echo '<pre>' . print_r($product, true) . '</pre>';
?>
<?php include ('partials/header.php')?>

<div class="row text-center">
    <div class="col-12">
        <!-- Jumbotron Header -->
        <header class="jumbotron">
            <h4 class="display-6"><?= $product['page_title'] ?></h4>
            <p class="lead"><?= $product['page_description'] ?></p>
        </header>
    </div>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/700x500" alt="">
            <div class="card-body">
                <h4 class="card-title"><?= $product['name'] ?></h4>
                <p class="card-text"><?= $product['long_description'] ?></p>
                <span class="text-right" style="float: right"><strong>Price: <span id="price"><?= $product['price'] ?> </span></strong><select id="currency"><option value="1"><?= $product['currency']?></option> </select></span>
                <input id="price_hidden" type="hidden" value="<?= $product['price'] ?>">
            </div>
            <div class="card-footer">
                <p class="card-text">
                    <span class="text-center"><a  href="<?= url() . str_replace('-', '/', $parent) ?>/<?= $p['id'] ?>" class="btn btn-primary text-left">Buy now</a></span>

                </p>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<?php include ('partials/footer.php')?>
<script>
    var price = $('#price_hidden').val();
    console.log(price);
    $.ajax({
        type: "GET",
        url: 'http://api.fixer.io/latest?base=<?= $product['currency']?>',
    }).done(function(data){
        $.each(data.rates, function (i, v) {
            $('#currency').append('<option value="'+v+'">'+i+'</option>')
        })
       // console.log(data.rates);
    })
    $(document).on('change','#currency', function(){
        $('#price').text(Math.round(price * ($(this).val()) * 100) / 100);
    })
</script>