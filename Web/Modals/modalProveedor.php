<!-- Modal SEARCH -->
<div class="modal fade" id="modalProveedor">
	<div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
		<div class="modal-content">

			<div class="text-center modal-header">
				<h3 class="w-100 modal-title">Búsqueda de Proveedores</h3>
				<button type="button" class="close" data-dismiss="modal" title="Cerrar">
					<i class="fa fa-window-close fa-2x text-danger"></i>
				</button>
			</div>
			<!--  -->
			<div class="card-body">
				<form method="POST" id="frm_BuscarProveedor" action="" autocomplete="off">
					<div class="container-fluid">
						<div class="row">
							<label class="font-weight-bold">Digite los primeros caracteres</label>
						</div>
						<div class="align-items-center pb-4 border row">
							<div class="col-8">
								<div class="row">
									<div class="p-1 col-4">
										<label class="font-weight-bold" for="nit">Nit Proveedor</label>

										<input type="text" name="nit" id="nit" class="form-control">
									</div>
									<div class="p-1 col-4">
										<label class="font-weight-bold" for="name">Proveedor</label>

										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-5 offset-1">
										<button type="submit" class="px-3 py-2 btn btn-primary" id="btnSearchProduct" title="Buscar">
											<i class="fa fa-search"></i>
										</button>
										<button type="reset" class="px-3 py-2 btn btn-primary" id="btnNewSearch" title="Nueva búsqueda">
											<i class="fa fa-file"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="container">
				<div class="newSearch" id="containerModalBuscarProveedor" style="display: none;">
					<table id="tableModalBuscarProveedor" class="table-bordered table-hover" width="100%">

						<thead class="table text-white bg-primary thead-primary">
							<tr>
								<th>Nit</th>
								<th>Proveedor</th>
								<th>Direccion</th>
								<th>Telefono</th>
								<th>Correo</th>
								<th>Creacion</th>
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

<style>
	div.dataTables_wrapper {
		margin: 0 auto;
		width: 80%;
	}
</style>

<div class="container">
	<div class="newSearch" id="containerModalBuscarProveedor" style="display: none;">
		<table id="tableModalBuscarProveedor" class="table-bordered table-hover" width="100%">

			<thead class="table text-white bg-primary thead-primary">
				<tr>
					<th>Nit</th>
					<th>Proveedor</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Creacion</th>
					<th>Ver</th>
					<th>Editar</th>

				</tr>
			</thead>

			<tbody></tbody>
		</table>
	</div>
</div>
<script>
	$(document).ready(function() {
		/***************************LIST PRODUCT**************************/
		$(function listProduct() {
			$(document).on("submit", "#frm_BuscarProveedor", function(event) {
				event.preventDefault();

				$("#containerModalBuscarProveedor").show();
				var status = $('select[name="status"] option:selected').text();
				$("#statusProduct").text(status);


				var tableModalBuscarProveedor = $("#tableModalBuscarProveedor").DataTable({
					dom: "Bfrtip",
					buttons: [{
						extend: "excelHtml5",
						text: '<i class="fa fa-file-excel"></i>',
						titleAttr: "Exportar a Excel",
						className: "bg-success",
						filename: "Cliente",
						sheetName: "Cliente"
					}],
					language: {
						"url": "../../assets/vendor/sb-admin-2/lib/datatables/language/datatablesSpanish.json"
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
						tableModalBuscarProveedor.columns.adjust();
					},
					ajax: {
						url: "../../App/lib/ajax.php",
						method: $(this).prop("method"),
						data: {
							modulo: "proveedor",
							controlador: "proveedor",
							funcion: "listProveedor",
							"name": $("#name").val(),
							"lastname": $("#lastName").val(),
							"nit": $("#nit").val()
						},
					},
					columns: [{
							data: "nit_provider"
						},
						{
							data: "name_provider"
						},
						{
							data: "address"
						},
						{
							data: "phone"
						},
						{
							data: "email"
						},
						{
							data: "creation_date"
						},
						{
							data: "btnVer"
						},
						{
							data: "btnEditar"
						}
					],
				});
			});
		});
		$(function verProveedor() {
			$(document).on("click", "#verProveedor", function() {
				let data = $("#tableModalBuscarProveedor").DataTable().row($(this).parents("tr")).data();
				// alert(data.nit_Provider);
				llamarVista("proveedor", "proveedor", "verProveedor", {
					nit_provider: data.nit_provider
				}, true);
			});
		});

		$(function editarProveedor() {
			$(document).on("click", "#editarProveedor", function() {
				let data = $("#tableModalBuscarProveedor").DataTable().row($(this).parents("tr")).data();
				llamarVista("proveedor", "proveedor", "editarProveedor", {
					nit_provider: data.nit_provider
				}, true);
			});
		});

	});
</script>