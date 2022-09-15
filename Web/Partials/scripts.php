<!-- !FOOTER -->
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

<script src="<?= base_url(); ?>/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= media(); ?>/js/login.js"></script>

<script src="<?= base_url(); ?>/vendor/datatable/js/datatables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/select2/js/select2.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/vendor/sweetalert/js/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>/vendor/alertify/js/alertify.min.js?v=<?= rand(); ?>"></script>
<script src="<?= base_url(); ?>/vendor/crypto-js/js/crypto-js.min.js"></script>
<<<<<<< HEAD

<script src="<?= media(); ?>/js/global.js"></script>
=======

<<<<<<< HEAD
<script src="<?= media(); ?>/js/global.js"></script>
=======
<!-- Crypto Js -> JavaScript library of crypto standards.. -->
<script src="<?= base_url(); ?>/vendor/crypto-js/js/crypto-js.min.js"></script>

<script src="../../public/js/global.js"></script>
>>>>>>> 3c2a3fb (100% perfil)
>>>>>>> 7836dc7 (1000)
<!-- <script>
    $(document).ready(function() {
        //________________________IMAGEN USUARIO DE PERFIL_______________________________
        $(function loadImageUser() {
            // alert($("#userId").val());
            var formData = new FormData(event.target);

            formData.append("modulo", "login");
            formData.append("controlador", "login");
            formData.append("funcion", "loadImageUser");
            formData.append('user_id', $("#userId").val());
            $.ajax({
                url: '../../App/lib/ajax.php',
                method: "post",
                dataType: "JSON",
                data: formData,
            }).done((res) => {
                alert("hry")
                // $("#img_profile").attr("src", "../../views/Admin/Files/" + res.address);
            });
        });
        // $(function imageHerence() {
        //     $("#img_profile").click(function() {
        //         $("#img_profile_herence").attr("src", $("#img_profile").attr("src"));
        //     });

        // });
        //_____________________________________________________________________________
    });
</script> -->