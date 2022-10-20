<!-- Custom styles for this template -->
<link href="../../public/my_js_css/css/form-validation.css" rel="stylesheet">

<div class="card text-center shadow-lg mt-2">
  <div class="badge-primary card-header ">
    <h2>formulario de pago</h2>
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 order-md-2">
          <h4 class="mb-3">Dirección de Envio</h4>
          <form id="generaCompra" class="needs-validation" novalidate>
            <?php foreach ($listUsuario as $usuario) : ?>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Nombre</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $usuario["nombre"]; ?>" required>
                  <div class="invalid-feedback">
                    Se requiere un nombre válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Apellido</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="<?= $usuario["apellido"]; ?>" required>
                  <div class="invalid-feedback">
                    Se requiere un Apellido válido.
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="email">Email
                  <!-- <span class="text-muted">(Opcional)</span> -->
                </label>
                <input type="email" class="form-control" id="email" value="<?= $usuario["email"]; ?>" placeholder="nombre@ejemplo.com">
                <div class="invalid-feedback">
                  Ingrese una dirección de correo electrónico válida para actualizaciones de envío.
                </div>
              </div>
            <?php endforeach; ?>


            <div class="mb-3">
              <label for="address">Direccion</label>
              <input type="text" class="form-control" id="address" placeholder="ejemplo: cl 9 O #D 50 -04" required>
              <div class="invalid-feedback">Por favor introduzca su direccion de envio.</div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="state">Departamento</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Seleccione...</option>
                  <option>Cali</option>
                  <option>Medellin</option>
                  <option>Bogota</option>
                </select>
                <div class="invalid-feedback">
                  Proporcione un Departamento válido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Guarda esta información para la próxima vez</label>
            </div>
            <hr class="mb-4">
            <div class="row">
              <div class="col-md-4 mb-3">
                <h4 class="mb-3">Pago</h4>

                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                  </div>
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="cc-number">Numero de Tarjeta</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Se requiere número de tarjeta de crédito
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiracion</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Fecha de vencimiento requerida
                </div>
              </div>
            </div>
            <div class="row">
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Comprar</button>
          </form>
        </div>
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tu Carrito</span>
            <span class="badge badge-secondary badge-pill" id="cantidad"><?= (($listCantidad['cantidad'])?($listCantidad['cantidad']): "") ?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php foreach ($listProducto as $list) : ?>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div id="product_pr">
                  <span class="delProducto" name="<?= $_SESSION['correo_login'] ?>" id="<?= $list['codigo'] ?>" onclick="elimina(this)">X</span>

                  <h6 class="my-0" id="nombre_producto"><?= $list['producto'] ?></h6>
                  <small class="text-muted" id="tipo_producto"><?= $list['nombre'] ?></small>
                </div>
                <span class="text-muted">$<?= $list['precio'] ?><div class="text-center"> Cantidad: <?= $list['cantidad'] ?></div> </span>
              </li>

            <?php endforeach; ?>

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (CO)</span>
              <strong id="total">$<?= (($listCantidad['total']) ?  $listCantidad['total'] : "0") ?></strong>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2022 Coffee Garden</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Terminos</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>

<script>
  function elimina(element) {
    var id = element.id,
      correo = element.getAttribute("name");

    $.ajax({
      url: '../../app/lib/ajax.php',
      method: "post",
      dataType: "JSON",
      data: {
        modulo: "carrito",
        controlador: "carrito",
        funcion: "eliminaDelCarrito",
        id: id,
        correo: correo,
      },
    }).done((res) => {
      if (res.tipoRespuesta == true) {
        alertify.notify("Eliminado con exito", "success", 2);
        $(element).parent().parent().remove();
        var cantidad = document.getElementById("cantidad").innerHTML;
        cantidad = cantidad - 1;
        if (cantidad === 0) {
          document.getElementById("cantidad").innerHTML = "";
        } else {
          document.getElementById("cantidad").innerHTML = cantidad;
        }
        var total = document.getElementById("total");
        if (res.total == null) {
          total.innerHTML = `$0`;
        } else {
          total.innerHTML = `${res.total}`;
        }
      }
    });
  }
  //   document.querySelector("#generaCompra").addEventListener("submit", function(e){
  //     var cantidad = document.getElementById("cantidad");

  //     if(cantidad.textContent == 0){
  //       swal({title:"No hay productos", type: "error"});
  //     } else {
  //       swal({title:"Compra exitosa", type: "succes"}); 
  //     }
  // });
</script>
<script src="../../public/js/form-validation.js"></script>