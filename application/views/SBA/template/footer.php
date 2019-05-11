    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('vendor/SBA/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vendor/SBA/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/SBA/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('vendor/SBA/'); ?>js/sb-admin-2.min.js"></script>

    <script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    fileName = fileName.slice(0, 30);
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
    </script>
    </body>

    </html>