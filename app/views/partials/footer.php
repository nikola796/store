</div>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?= url()?>vendor/popper/popper.min.js"></script>
<script src="<?= url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= url()?>public/js/cbpHorizontalMenu.js"></script>
<script>
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