<?php //getModal('modalCategorias', $data); ?>
<?php getModal('modalCategorias'); ?>
<div class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
  <div class="">
    <div class="app-title">
      <div class="row">
        <div class="col-8">
          <h1>
            <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
          </h1>
        </div>
        <div class="col-4">
          <br>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="clearfix">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="tile">
                        <div class="tile-body">
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tableCategorias">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Descripción</th>
                                  <th>Status</th>
                                  <th>Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url(); ?>/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>/public/js/categorias.js"></script>