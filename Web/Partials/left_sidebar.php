<?php //if ($_SESSION["rolid"] != 2) : ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky shadow-lg">
                    <ul class="nav flex-column">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3 pt-5" href="./" id="dash"><i class="fas fa-home"></i>Home - Dashboard</a>
                            <?php if ($_SESSION["rolid"] != 2) : ?>
                                <a class="list-group-item list-group-item-action list-group-item-light p-3" id="verProducto">Productos</a>
                            <?php endif; ?>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" id="verCarrito"><i class="fas fa-shopping-cart"></i>Carrito</a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
