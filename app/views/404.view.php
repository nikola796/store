<?php $root_category = '' ?>
<?php include('partials/header.php') ?>
    <div class="row">
        <div class="col-12">
            <div class="error-template text-center">
                <h1>Oops!</h1>
                <h2>404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!<br>
                </div>
                <div class="error-actions">
                    <a href="<?php echo url() ?>" class="btn btn-primary">
                        <i class="icon-home icon-white"></i> Take Me Home </a>
                    <a href="mailto:<?php echo 'contact@store_name.com' ?>" class="btn btn-default">
                        <i class="icon-envelope"></i> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
<?php include('partials/footer.php');