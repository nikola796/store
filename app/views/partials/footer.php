</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="copy text-center">
            <p class="m-0 text-center text-white">Copyright &copy; <a href="<?= url() ?>">Store Name</a> 2017</p>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?= url()?>vendor/popper/popper.min.js"></script>
<script src="<?= url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= url()?>public/js/cbpHorizontalMenu.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type="text/javascript" src="<?=url()?>public/js/libs/stellarnav.min.js"></script>

<script>

    (function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        });
    })(jQuery);

    jQuery(document).ready(function($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'light',
            breakpoint: 1366,
            sticky     : true,
        });
    });
    $(function() {



        cbpHorizontalMenu.init();

        $(document).on('mouseenter', '.products', function(){
            console.log('HOver');
        })
        $(document).on('mouseleave', '.products', function(){
            console.log('Leave');
        })
    });
</script>
</body>

</html>