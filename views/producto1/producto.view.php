

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
    </div>
    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
    </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Productos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        Esta semana
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 order-md-1">
      <!-- <h4 class="mb-3">Dirección de Envio</h4> -->
      <form class="needs-validation" novalidate="" id="formCategorias">
        <div class="row">

          <div class="mt-4 row">
            <div class="align-self-center col-3 col-lg-5">
              <label for="selectCategorias" class="font-weight-bold">Categorias: </label>
            </div>
            <div class="col-9 col-lg-6">
              <select name="selectCategorias" id="selectCategorias" class="form-control"></select>
            </div>
          </div>
        </div>
        <h1>N</h1>
      <!-- Productos -->
       
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- <div class="carousel-item"> -->
            <div class="carousel-item active">
              <img class="d-block w-100" src="../public/img/nothing.png" alt="First slide" height="100" width="100">
            </div>
              <div id="selectProducto"> </div>
            
              
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- !Productos -->
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar a la comprobación</button>
      </form>
    </div>
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tu carrito</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Nombre de Producto</h6>
            <small class="text-muted">Breve descripción</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Segundo Producto</h6>
            <small class="text-muted">Breve descripción</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Tercer articulo</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
      </ul>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Copyright <?= date("Y"); ?> TiendAunar</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Terminos</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
  </div>

  <!-- Modal Semana de la Ingeniería 6 -->
  <div class="modal fade" id="modalTienda" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="container-fluid">
        <div class="justify-content-center row">
          <div class="col-12">
            <img src="../public/img/tienda-virtual.jpg" alt="Logo Semana 6" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url(); ?>/vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>/public/js/producto.js"></script>
