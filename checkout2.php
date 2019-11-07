<?php 
    include("codigo.php");
    include("verificar.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sun Side🌞 Agencia de Viajes ✈</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body class=" bg-light">
    

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sun Side 🌞</a>
            
            <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#logoutModal"><b>SALIR ⬇</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="cerrar.php">Cerrar sesión</a>
            </div>
        </div>
        </div>
    </div>

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text  align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        Formulario de pago</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="p-2 text-center">
            <h2>Sun Side 🌞 Agencia de Viajes</h2>
            <p class="lead">Acontinuación llenar todos los datos solicitados para poder seguir con su viaje.</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Tu carrito</span>
                    <span class="badge badge-secondary badge-pill">2</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Precio</h6>
                            <small class="text-muted">El precio del boleto de su viaje</small>
                        </div>
                        <?php
                            $sql = "SELECT * FROM viaje2 where ced_Viajero ='$IDUser' ";
                            $consulta =  mysqli_query($conn, $sql);
                            $fila = mysqli_num_rows($consulta);
    
                            if ($fila) {
                                    while ($registro = mysqli_fetch_assoc($consulta)) {
                                            $costosViajar = $registro["costo_Viaje"];
                                            $codi_v = $registro["codigo_Viaje"];
                                    }?>
                                        <span class="text-muted">$ <?php echo "$costosViajar"; ?></span> 
                                    <?php
                            }
                        ?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Seguro de Viajero / Equipaje</h6>
                            <small class="text-muted">Viaje protegido contra robo y pérdidas</small>
                        </div>
                        <span class="text-muted">$50</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light lh-condensed">
                        <div>
                            <h6 class="my-0">Impuestos</h6>
                            <small class="text-muted">Impuestos (aproximado) + Recargos de combustible</small>
                        </div>
                        <span class="text-muted">8%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Código promocional</h6>
                            <small>SUNSIDE-2020</small>
                        </div>
                        <span class="text-success">-5%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <?php
                            $valor = $costosViajar + 50; 
                            $imp = $valor * 0.08;
                            $costo = $valor + $imp;
                            $desc =$costo * 0.05;
                            $totalViaje = $costo - $desc;
                        ?>
                        <strong class="text-danger">$ <?php echo "$totalViaje"; ?></strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Información del viajero</h4>
                <form action="sesion.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre Completo</label>
                            <input type="text" class="form-control" id="firstName" Disabled value="<?php echo "$nombreUser"; ?>">
                            <input type="hidden" class="form-control" name="priceTotal" value="<?php echo "$totalViaje"; ?>">
                            <input type="hidden" class="form-control" name="codiV" value="<?php echo "$codi_v"; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Número de cédula</label>
                            <input type="text" class="form-control" Disabled id="firstName"value="<?php echo "$IDUser"; ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Nombre de usuario</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="usernamex" value="<?php echo "$usernam"; ?>">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Métodos Pagos</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="" type="radio" class="custom-control-input" >
                            <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="" type="radio" class="custom-control-input" >
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nombre en la tarjeta</label>
                            <input type="text" class="form-control" id="cc-name" value="<?php  echo "$nombreUser";?>" Disabled>
                            <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número de tarjeta de crédito</label>
                            <input type="text" class="form-control" id="cc-number" value="<?php echo rand(100000,100000000000); ?>" Disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Vencimiento</label>
                            <input type="text" class="form-control" id="cc-expiration" value="10/2021" Disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV </label>
                            <input type="text" class="form-control" id="cc-cvv" value="<?php echo rand(100,999); ?>" Disabled>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox mb-3 ">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                        <label class="custom-control-label" for="customCheck1">Acepta Términos y Condiciones</label>
                    </div>
                    <div class="p-4">
                        <button name="btn_checkout2" class="btn btn-success btn-lg btn-block p-4" type="submit" onclick="checkout()">Procesar Pago 💰</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section p-4" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved Sun Side🌞 | The Project made <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://github.com/Guille0197/AgenciaViajes-php"
                            target="_blank">Guillermo Navarro</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>

    <!-- DatePicker Time -->
    <script>
    $('#timepicker').timepicker({
        uiLibrary: 'bootstrap4'
    });
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>