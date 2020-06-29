<?php
include("funciones/db.php");

$productos = "SELECT p1.id_prod, p1.nombre_prod, p1.precio_prod, p1.des_prod, p1.fech_prod, p1.tel_prod, p2.nombre_cat, p3.nombre_pro, p1.img_prod, p1.img_prod_2, p1.img_prod_3
FROM productos p1 INNER JOIN categorias_prod p2 on p1.id_cat_prod = p2.id_cat_prod INNER JOIN provedor p3 ON p1.id_provedor = p3.id_provedor";
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tablas Categorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" href="producto.css">
</head>
<script type="text/javascript">
    function confirmar() {
        var respuesta = confirm("Está seguro de eliminar este registro");

        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Costos CxC/CxP</li>
                            <li>
                                <a href="Tprovedores.php">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Proveedores
                                </a>
                            </li>
                            <li>
                                <a href="Treglamento.php">
                                    <i class="metismenu-icon pe-7s-notebook"></i>
                                    Reglamentos
                                </a>
                            </li>
                            <li>
                                <a href="tabla-categoria.php">
                                    <i class="metismenu-icon pe-7s-albums"></i>
                                    Categorias
                                </a>
                            </li>
                            <li>
                                <a href="Tproductos.php">
                                    <i class="metismenu-icon pe-7s-albums"></i>
                                    Productos
                                </a>
                            </li>
                            <li>
                                <a href="Vi_producto.php">
                                    <i class="metismenu-icon pe-7s-albums"></i>
                                    Catálogo
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Galeria Productos
                                    <div class="page-title-subheading">Productos
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php $resultado = mysqli_query($conectar, $productos);



                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="galleria">
                                                <div class="mini">
                                                    <div>
                                                        <?php echo "<img class='img_mini' src='" . $row['img_prod_2'] . "'>"; ?>
                                                    </div>
                                                    <div>
                                                        <?php echo "<img class='img_mini' src='" . $row['img_prod_3'] . "'>"; ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php echo "<img class='img_principal' src='" . $row['img_prod'] . "'>"; ?>
                                                </div>
                                                <div class="descripcion">

                                                    <h1>$<?php echo $row["precio_prod"] ?>MX</h1>
                                                    <h3><?php echo $row["nombre_prod"] ?></h3>
                                                    <h6>Descripción:</h6>
                                                    <p><?php echo $row["des_prod"] ?></p>
                                                    <h6>Proveedor:</h6>
                                                    <p><?php echo $row["nombre_pro"] ?></p>
                                                    <h6>Telefono del Proveedor:</h6>
                                                    <p><?php echo $row["tel_prod"] ?></p>
                                                    <h6>Categoria:</h6>
                                                    <p><?php echo $row["nombre_cat"] ?></p>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php }
                    mysqli_free_result($resultado); ?>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>