

  <!-- Favicons -->
  <!-- <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c"> -->


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../../public/my_js_css/css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <div class="py-4 text-center">
      <h2>formulario de pago</h2>
    </div>

    <div class="row">
      <div class="col-md-8 order-md-2">
        <h4 class="mb-3">Dirección de Envio</h4>
        <form class="needs-validation" novalidate>
          <?php foreach ($listUsuario as $usuario):?>
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

          <!-- <div class="mb-3">
          <label for="username">Numbre de Usuario</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
            Su nombre de usuario es requerido.
            </div>
          </div>
        </div> -->

          <div class="mb-3">
            <label for="email">Email
              <!-- <span class="text-muted">(Opcional)</span> -->
            </label>
            <input type="email" class="form-control" id="email" value="<?= $usuario["email"]; ?>"placeholder="nombre@ejemplo.com">
            <div class="invalid-feedback">
              Ingrese una dirección de correo electrónico válida para actualizaciones de envío.
            </div>
          </div>
          <?php endforeach; ?>


          <div class="mb-3">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">Por favor introduzca su direccion de envio.</div>
          </div>

          <div class="row">
            <!-- <div class="col-md-5 mb-3">
            <label for="country">Pa&iacute;s</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Seleccione...</option>
              <option>Colombia</option>
            </select>
            <div class="invalid-feedback">
            Seleccione un país válido.
            </div>
          </div> -->
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
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar a la comprobación</button>
        </form>
      </div>
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Tu Carrito</span>
          <span class="badge badge-secondary badge-pill"><?= $listCantidad['cantidad']?></span>
        </h4>
        <ul class="list-group mb-3">
       <?php foreach ($listProducto as $list) : ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div id="product_pr">
            <span class="delProducto" name="<?= $_SESSION['correo_login']?>" id="<?= $list['codigo']?>" onclick="elimina(this)" >X</span>

              <h6 class="my-0" id="nombre_producto"><?= $list['producto']?></h6>
              <small class="text-muted" id="tipo_producto"><?= $list['nombre']?></small>
            </div>
            <span class="text-muted">$<?= $list['precio']?><div class="text-center"> Cantidad: <?= $list['cantidad']?></div> </span>
          </li>

       <?php endforeach; ?>
    
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (CO)</span>
            <strong id="total">$<?= (($listCantidad['total'])?  $listCantidad['total']:"0")?></strong>
          </li>
        </ul>
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
</body>

</html>
<script>
  function elimina(element) {
    var id = element.id, correo = element.getAttribute("name");

    $.ajax({
      url: '../../app/lib/ajax.php',
			method: "post",
			dataType: "JSON",
			data: {
				modulo: "carrito",
				controlador: "carrito",
				funcion: "eliminaDelCarrito",
				id: id,
				correo:correo,
			},
    }).done((res) => {
      if(res.tipoRespuesta == true){
				alertify.notify("Eliminado con exito", "success", 2, function() {});
        $(element).parent().parent().remove();
         var total = document.getElementById("total");
         if(res.total == null){ total.innerHTML = `$0`;}else{ total.innerHTML = `${res.total}`;}
      }
    });
  }
</script>