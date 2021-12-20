<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CORTE Y ESTILO - Tu peluqueria de confianza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>9:00 - 21:00 Lunes - Viernes</h2>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>976 25 64 74 Pide tu cita</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/home/home" class="navbar-brand">CE</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/home/home" class="nav-item nav-link active">Home</a>
                    <a href="/services/home" class="nav-item nav-link">Servicios</a>
                    <a href="#" class="nav-item nav-link">Trabajadores</a>
                    <a href="/login" class="nav-item nav-link">Acceso administrador</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header" id="page-header-image1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Trabajadores</h2>
                </div>
                <div class="col-12">
                    <a href="/home/home">Home</a>
                    <a href="#">Trabajadores</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Plantilla</p>
                <h2>Nuestro equipo</h2>
            </div>


            <div class="row">
                <?php
                foreach ($workers as $key => $worker) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout"></i>
                            </div>
                            <h3>
                                <?= $worker->name . "&nbsp;" . $worker->surname ?>
                            </h3>
                            <p style="text-align:center">
                                <?= $worker->details ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script> <!-- Service End -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>