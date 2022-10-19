<!-- <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Checkout example · Bootstrap v4.6</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/"> -->



  <!-- Bootstrap core CSS -->
  <link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


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
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <div class="py-4 text-center">
      <!-- <img class="d-block mx-auto mb-4" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h2>formulario de pago</h2>
      <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
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

          <!-- <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div> -->

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
            <!-- <div class="col-md-3 mb-3">
            <label for="zip">C&oacute;digo Postal</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
            C&oacute;digo Postal requirido.
            </div>
          </div> -->
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

            <!-- <div class="col-md-6 mb-3">
            <label for="cc-name">Nombre en la tarjeta</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
            <div class="invalid-feedback">
            Se requiere el nombre en la tarjeta
            </div>
          </div> -->
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
                <!-- <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">PayPal</label>
                </div> -->
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
            <div>
              <h6 class="my-0" id="nombre_producto"><?= $list['producto']?></h6>
              <small class="text-muted" id="tipo_producto"><?= $list['nombre']?></small>
            </div>
            <span class="text-muted">$<?= $list['precio']?>  N°: <?= $list['cantidad']?> </span>
          </li>
       <?php endforeach; ?>
    
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (CO)</span>
            <strong>$<?= $listCantidad['total']?></strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redimir</button>
            </div>
          </div>
        </form>
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


  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="form-validation.js"></script> -->
</body>

</html>