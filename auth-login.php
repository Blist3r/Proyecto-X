<?php

session_start();

if (isset($_SESSION['user'])) {
    header('location:index.php');
}

?>

<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>La Factory | Iniciar Seccion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!--Background-->
        <link href="assets/css/background.css" rel="stylesheet" type="text/css"/>

    </head>
    <!--Fondo-->
    <body>

        <div class="bg"></div>
        
        <div class="home-btn d-none d-sm-block">
            <a href="index.php"><i class="mdi mdi-home-variant h2 text-black"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.php"></a>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4" style="color: black;">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Iniciar Sesion</h5>
                                    <form class="form-horizontal" action="assets/php/validar_login.php" method="POST">
                                        
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                                                    <label for="identificacion">Usuario</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                    <label for="password">Contraseña</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">Recuerdame</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" Style="color:rgb(39, 39, 39);"><i class="mdi mdi-lock"></i> Olvido su contraseña?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Iniciar Sesion</button>
                                                </div>
                                                <?php if (isset($_GET['e']) && $_GET['e'] == 1) { ?>
                                                    <div class='text-center mt-2'>
                                                        <h5 class="text-danger">Usuario o contraseña incorrectos</h5>
                                                    </div>
                                                <?php } ?>

                                                <div class="mt-4 text-center">
                                                    <a href="auth-register.html" style="color: rgb(39, 39, 39);"><i class="mdi mdi-account-circle mr-1"></i> Crear una Cuenta</a>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
