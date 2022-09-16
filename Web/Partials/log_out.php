<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estas eguro?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" id="exit">Salir</a>
        </div>
    </div>
    </div>
</div>
<script>
    (function closeSession() {
        $(document).on("click", "#exit", function(event) {
            event.preventDefault();

            $.ajax({
                url: "../../app/lib/ajax.php",
                method: "POST",
                data: {
                    module: "login",
                    controller: "login",
                    nameFunction: "cerrarSesion",
                },
            }).done(() => {
                $('#logoutModal').modal().hide();
                window.location = "../../";
            });
        });

    }());
</script>