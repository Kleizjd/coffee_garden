
<!-- Modal BUSCAR -->
<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <!-- <div class="modal fade" id="modalSearchProduct"> -->
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
        <div class="modal-content">

            <div class="text-center modal-header">
                <h3 class="w-100 modal-title">Búsqueda de Productos</h3>
                <button type="button" class="close" data-dismiss="modal" title="Cerrar">
                    <i class="fa fa-window-close fa-2x text-danger"></i>
                </button>
            </div>
            <div class="card-body">
                <form method="POST" id="frm_SearchProducto" action="" autocomplete="off">
                    <div class="container-fluid">
                        <div class="align-items-center pb-4  row">
                            <div class="row ">
                                <div class="col-3">
                                    <label class="font-weight-bold" for="categoria_producto">Categoria</label>

                                </div>
                                <div class="p-1 col-7">
                                    <select name="categoria_producto" id="categoria_producto" class="form-control">
                                        <option value="">Seleccione ...</option>
                                        <option value="1">Suave</option>
                                        <option value="2">Intermedio</option>
                                        <option value="3">Medio Oscuro</option>
                                        <option value="4">Oscuro</option>
                                        <option value="T">Todos</option>
                                    </select>
                                </div>
                                <div class="col-2 ">
                                    <button type="submit" class="px-3 py-2 btn btn-primary" title="Buscar">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="newSearch" id="containerModalSearchProduct" style="display: none;">
                    <table id="tableModalSearchProducto" class="table-bordered table-hover" width="100%">

                        <thead class="table text-white bg-primary thead-primary">
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                                <th>Ver</th>
                                <th>Editar</th>
                            </tr>
                        </thead>

                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<script>
    $(document).ready(function() {
        /***************************LIST PRODUCT**************************/
        $(function listProducto() {
            $(document).on("submit", "#frm_SearchProducto", function(event) {
                event.preventDefault();
                if ($("#categoria_producto").val()) {
                    $("#containerModalSearchProduct").show();
                    var status = $('select[name="status"] option:selected').text();
                    $("#statusProduct").text(status);


                    var tableModalSearchProducto = $("#tableModalSearchProducto").DataTable({

                        dom: "Bfrtip",
                        buttons: [{
                            extend: "excelHtml5",
                            text: '<i class="fa fa-file-excel"></i>',
                            titleAttr: "Exportar a Excel",
                            className: "bg-success",
                            filename: "Producto",
                            sheetName: "Producto"
                        }],
                        language: {
                            "url": "../../vendor/datatable/language/datatablesSpanish.json"
                        },
                        destroy: true,
                        pageLength: 10,
                        autoWidth: false,
                        lengthChange: false,
                        columnDefs: [{
                            "className": "text-center",
                            "targets": "_all"
                        }],
                        drawCallback: () => {
                            tableModalSearchProducto.columns.adjust();
                        },
                        ajax: {
                            url: "../../App/lib/ajax.php",
                            method: $(this).prop("method"),
                            data: {
                                modulo: "producto",
                                controlador: "producto",
                                funcion: "listProducto",
                                idProducto: $("#idProducto").val(),
                                producto: $("#producto").val(),
                                categoria_producto: $("#categoria_producto").val()
                            },
                        },
                        columns: [{data: "codigo"},
                                  {data: "producto"},
                                  {data: "categoria"},
                                  {data: "descripcion"},
                                  {data: "btnVer"},
                                  {data: "btnEditar"}],});
                } else {
                    swal({type: "warning",title: "Seleccione una Categoria"});
                }
            });
        });
        $(function viewWatchProduct() {
            $(document).on("click", "#verProductoVista", function() {
                let data = $("#tableModalSearchProducto").DataTable().row($(this).parents("tr")).data();
                llamarVista("producto", "producto", "visualizarProducto", {
                    idProducto: data.codigo
                }, true);
            });
        });

        $(function viewEditProduct() {
            $(document).on("click", "#viewEditarProducto", function() {
                let data = $("#tableModalSearchProducto").DataTable().row($(this).parents("tr")).data();
                llamarVista("producto", "producto", "viewEditarProducto", {
                    codigo: data.codigo
                }, true);
            });
        });

    });
    // REMPLAZA CARACTERES
    //          var done = res.replace(/[*+\-^${}()|[\]\\]/g,'');
    //         document.getElementById('cargarVista').innerHTML = "";
    //         $('#cargarVista').html(done); //_jQuery
</script>