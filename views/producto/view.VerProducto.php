<?php getModal('modalProducto'); ?>

<div class="card">
    <div class="card-header">
        <!-- <h4>Ver Producto</h4> -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Visualizando Producto</h4>
                
            </div>
            <div class="col-md-3 text-right">
                <button  type="button" class="btn btn-primary" data-toggle="modal"  title="Buscar" data-target="#modalProducto"><i class="fa fa-search"></i>Nueva busqueda</button>
            </div>
            
            <div class="col-md-4 text-right">
                <div class="d-flex justify-content-end">
                    
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item" id="verProducto">Producto</li>
                        <li class="breadcrumb-item active">Ver Producto</li>
                    </ol>
            
                </div>
            </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" id="frm_Product" method="POST" autocomplete="off">
                <?php foreach ($sqlProduct as $product) {} ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm">
                            <div class="row pb-3">
                               
                                <div class="col-sm-1">
                              

                                </div>
                                
                                <div class="col-sm-3 offset-1">
                                    <h4><span class="badge badge-success" id="statProduct"><?= $product["estado"]; ?></span></h4>
                                </div>
                            </div>

                            <div class="row pb-3">
                                <div class="col-sm-2">
                                    <label for="code">Codigo del producto</label>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" value="<?= $product["codigo"]; ?>" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="product">Producto</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="product" value="<?= $product["producto"]; ?>" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="amount">Cantidad</label>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="amount" value="<?= $product["cantidad"]; ?>" readonly>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3">
                                    <label for="description">Descripcion</label>
                                </div>
                                <div class="col-sm">
                                    <textarea rows="4" cols="4" class="form-control" id="description" readonly><?= $product["descripcion"]; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal BUSCAR -->
    <div class="modal fade" id="modalSearchProduct">
        <div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
            <div class="modal-content">

                <div class="text-center modal-header">
                    <h3 class="w-100 modal-title">Búsqueda de productos</h3>
                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">
                        <i class="fa fa-window-close fa-2x text-danger"></i>
                    </button>
                </div>

                <div class="modal-body">

                </div>

            </div>
        </div>
    </div>
    <!--  -->