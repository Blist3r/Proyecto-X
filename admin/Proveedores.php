<?php

require ('../assets/php/validaciones/secure_login.php');
require ('../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('SELECT * from usuarios where id = :id');
$sql->bindParam(':id', $_SESSION['user']);
$sql->execute();

$datos = $sql->fetchAll();

   ?>


<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Factory - Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- datepicker -->
        <link href="../assets/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="../assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/La_factory.jpg" alt="100" height="150">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn" style="margin-top: 35px">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-tune"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $datos[0]['nombre']; ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Perfil</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Caja</a>
                                <?php if($datos[0]['tipo'] == 'admin') { ?>
                                    <a class="dropdown-item" href="index.php"><i class="mdi mdi-settings font-size-16 align-middle mr-1"></i> Herramientas Admin</a>
                                <?php } ?>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Cambiar Contraseña</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Salir</a>
                            </div>
                        </div>
            
                    </div>
                </div>

            </header>

             <!-- ========== Left Sidebar Start ========== -->
             <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="index.php" class="waves-effect">
                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
                    <span>Inicio</span>
                </a>
            </li>

            <li class="menu-title">Acciones</li>

            <li>
                <a href="usuarios.php" class=" waves-effect">
                    <div class="d-inline-block icons-sm mr-1"><i class="mdi mdi-account-multiple-outline p-1" style="font-size: 20px; color: #f3a82b;"></i></div>
                    <span>Usuarios</span>
                </a>
            </li>

            <li>
                <a href="Proveedores.php" class=" waves-effect">
                    <div class="d-inline-block icons-sm mr-1"><i class="mdi mdi-truck-outline p-1" style="font-size: 20px; color: #f3a82b;"></i></div>
                    <span>Proveedores</span>
                </a>
            </li>

            <li>
                <a href="ventas.php" class=" waves-effect">
                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-document-layout-left"></i></div>
                    <span>Inventario</span>
                </a>
            </li>

            <li>
                <a href="productos.php" class=" waves-effect">
                    <div class="d-inline-block icons-sm mr-1"><i class="mdi mdi-food p-1" style="font-size: 20px; color: #f3a82b;"></i></div>
                    <span>Productos</span>
                </a>
            </li>

        </ul>

    </div>
    <!-- Sidebar -->
</div>
</div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">LA FACTORY</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">User Admin: <?php echo $datos[0]['nombre'].' '.$datos[0]['apellido'] ; ?></li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Base: $ 0</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                
                                                <div class="card-title d-flex col-12">
                                                    <div class="row col-6">
                                                        <h5 class="p-3">Proveedores</h5>
                                                    </div>
                                                    <div class="row col-6 justify-content-end">
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_createUser"> Crear</button>
                                                    </div>
                                                </div>

                                                <?php if (isset($_GET['update']) && $_GET['update'] == 1) { ?>
                                                        <div class="alert alert-primary col-12" role="alert">
                                                            El proveedor se edito correctamente.
                                                        </div>
                                                <?php } ?>
                                                
                                                <?php if (isset($_GET['update']) && $_GET['update'] == 0) { ?>
                                                    <div class="alert alert-danger col-12" role="alert">
                                                        El proveedor NO se edito correctamente.
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($_GET['create']) && $_GET['create'] == 1) { ?>
                                                        <div class="alert alert-primary col-12" role="alert">
                                                            El proveedor se creo correctamente.
                                                        </div>
                                                <?php } ?>
                                                
                                                <?php if (isset($_GET['create']) && $_GET['create'] == 0) { ?>
                                                    <div class="alert alert-danger col-12" role="alert">
                                                        El proveedor NO se creo correctamente.
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
                                                        <div class="alert alert-primary col-12" role="alert">
                                                            El proveedor se elimino correctamente.
                                                        </div>
                                                <?php } ?>
                                                
                                                <?php if (isset($_GET['delete']) && $_GET['delete'] == 0) { ?>
                                                    <div class="alert alert-danger col-12" role="alert">
                                                        El proveedor NO se elimino correctamente.
                                                    </div>
                                                <?php } ?>

                                                <div class="col-xl-12"> 
                                                            
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Nombre</th>
                                                                    <th>Valor</th>
                                                                    <th class="text-center"><i class="mdi mdi-settings font-size-16 align-middle mr-1"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php

                                                                $sql_prov = $conexion->prepare('SELECT * from proveedores where estado = 1');
                                                                $sql_prov->execute();

                                                                $datos_prov = $sql_prov->fetchAll();

                                                                foreach ($datos_prov as $row) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $row['identificacion']; ?></th>
                                                                        <td><?php echo $row['nombre'].' '.$row['apellido']; ?></td>
                                                                        <td><?php echo $row['valor']; ?></td>
                                                                        <td><?php echo $row['estado']; ?></td>
                                                                        <td class="text-center">
                                                                            <button class="btn btn-warning" onclick="editUser(<?php echo $row['id']; ?>)"><i class="mdi mdi-file-edit"></i></button> 
                                                                            <button class="btn btn-danger" onclick="deleteUser(<?php echo $row['id']; ?>, '<?php echo $row['nombre']; ?>')"><i class="mdi mdi-delete"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                            
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © La Factory.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    <!-- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign -->
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar py-4 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="px-4 py-3 mt-2 bg-light">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Favourites</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Other Chats</h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Sean Howse</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Dean Coward</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Hayley East</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="p-3 mb-0 mt-4 bg-light">Working Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="p-3 mb-0 mt-4 bg-light">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                            <h6 class="px-4 py-3 bg-light">General Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Online Status</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                            </div>

                            <h6 class="mt-4">Auto Updates</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                            </div>

                            <h6 class="mt-4">Backup Setup</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                                <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                            </div>

                        </div>

                        <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Application Alerts</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                                <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                            </div>

                            <h6 class="mt-4">API</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                                <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- INIT MODALS -->

        <!-- Modal para editar los proveedores -->
        <div class="modal fade bs-example-modal-xl" id="modal_editprov" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Editar Proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>     
                        </button>
                    </div>
                    <div class="modal-body" id="content_modal_editprov">
                        <form action="assets/php/user_update.php" method="POST">
                            <div class="form-group row">
                                <label for="identificacion_edit" class="col-md-2 col-form-label">Identificacion</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" id="identificacion_edit" name="identificacion_edit" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre_edit" class="col-md-2 col-form-label">Nombre</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="nombre_edit" name="nombre_edit" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contacto_edit" class="col-md-2 col-form-label">Contacto</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="int" id="contacto_edit" name="contacto_edit" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Estado</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="estado_proveedor_edit" name="estado_proveedor_edit">
                                        <option value="admin">Administrador</option>
                                        <option value="general">General</option>
                                    </select>
                                </div>  
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg mt-4">Actualizar</button>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- Modal para crear los proveedores -->
        <div class="modal fade bs-example-modal-xl" id="modal_createUser" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModal">Crear Proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="form-group row">
                                <label for="nombre" class="col-md-2 col-form-label">Nombre</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escriba el nombre" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contacto_edit" class="col-md-2 col-form-label">Contacto</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="int" id="contacto_edit" name="contacto_edit" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Estado</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="estado_proveedor_edit" name="estado_proveedor_edit">
                                        <option value="admin">Administrador</option>
                                        <option value="general">General</option>
                                    </select>
                                </div>  
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg mt-4">Crear</button>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- Modal alert delete proveedor -->
        <div class="modal fade bs-example-modal-xl" id="modal_deleteUser" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModal">Eliminar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="content_delete_user"></div>
                        <form action="assets/php/user_delete.php" method="POST">
                            
                            <input class="form-control d-none" type="number" id="identificacion_delete" name="identificacion_delete" />
                            
                            <div class="row d-flex">
                                <div class="form-group row justify-content-center">
                                    <button type="button" class="btn btn-dark btn-lg m-4" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <button type="submit" class="btn btn-danger btn-lg m-4">Eliminar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="../assets/libs/air-datepicker/js/datepicker.min.js"></script>
        <script src="../assets/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

        <!-- apexcharts -->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="../assets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <!-- Jq vector map -->
        <script src="../assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="../assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="../assets/js/pages/dashboard.init.js"></script>

        <script src="../assets/js/app.js"></script>

        <!-- Archivo app.js del modulo administrador -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
