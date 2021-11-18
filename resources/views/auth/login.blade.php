<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Sign In | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <div class="overlay"></div>

    <!-- ========== signin-section start ========== -->
    <section class="signin-section pt-90">
        <div class="container d-flex justify-content-center">
            <div class="row g-0 auth-row">
                <div class="col-lg-8">
                    <div class="auth-cover-wrapper ">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">Bienvenido de nuevo</h1>
                                <p class="text-medium">
                                    Inicie sesión en su cuenta existente para continuar
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="{{ asset('assets/images/banner.png') }}" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="assets/images/auth/shape.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <h6 class="mb-15">Sign In Form</h6>
                            <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.
                            </p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Usuario</label>
                                            <input type="text" placeholder="Usuario" id="usuario" name="usuario"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Contraseña" id="contraseña"
                                                name="contraseña" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class=" button-group  d-flex justify-content-center flex-wrap">
                                            <button class=" main-btn  primary-btn btn-hover w-100 text-center">
                                                Iniciar Sesión
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>

                            <p class="text-sm text-medium text-dark text-center pt-50">
                                ¿Aún no tienes una cuenta?
                                <a href="#0">Crea una cuenta</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        </div>
    </section>
    <!-- ========== signin-section end ========== -->

    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
