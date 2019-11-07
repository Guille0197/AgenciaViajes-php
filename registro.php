<?php 
    $mysqli = mysqli_connect("localhost", "root", "", "bd_agenciaViaje");
    include("codigo.php");
    include("verificar.php");

    if (!isset($_SESSION['rol'])) {
      header('Location: login.php');
    }
    else {
      if ($_SESSION['rol'] != 2) {
        header('Location: login.php');
      }
    }
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

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sun Side 🌞</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="perfilUser.php"
                            class="nav-link text-dark"><b><?php  echo "$nombreUser";?></b></a></li>
                    <li class="nav-item active">
                        <a class="nav-link text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                            Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                    actual.</div>
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
                        Datos del Viaje</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container m-0 ">
        <div class="row">
            <div class="col-3 bg-dark">
                <div class="nav flex-column nav-pills p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="  nav-link active " href="registro.php" role="tab" aria-controls="v-pills-home"
                        aria-selected="true"><strong>Registrar Datos 📌</strong></a>
                        <a class=" nav-link"  href="reservacion.php" role="tab" aria-controls="v-pills-messages" aria-selected="false"><strong>Reservación 🧳</strong></a>
                    <a class="  nav-link" href="informe.php" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false"><strong>Informe 📊</strong></a>
                    <a class=" nav-link" href="perfilUser.php" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false"><strong>Perfil 😎</strong></a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- Registrar Datos del Viajero -->
                    <div class="tab-pane fade show active container" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                        <div class="p-4">
                            <h2>Ingrese los datos de su nuevo viaje ✈ 🛂</h2>
                            <hr>
                            <!-- Formulario -->
                            <form action="codigo.php" method="POST">
                                
                                <div class="form-row">                                    
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="precio_viaje"
                                            class="text-success btn btn-lg bg-white font-weight-bold text-left"
                                            value="<?php echo  mt_rand(250,3000); ?> ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="codigo_viaje"
                                            class="text-danger btn btn-lg bg-white font-weight-bold"
                                            value="<?php echo rand(100,10000); ?> ">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label>Hora de salida</label>
                                        <input type="text" name="hora_viaje" class="form-control" id="timepicker"
                                            placeholder="Seleccione Hora" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cantidad de asientos</label>
                                        <select name="canti_asientos" id="" class="form-control" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha Salida</label>
                                        <input type="text" name="fecha_salida" class="form-control checkin_date" placeholder="Seleccione la fecha" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha Regreso</label>
                                        <input type="text" name="fecha_regreso" class="form-control checkin_date" placeholder="Seleccione la fecha" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Lugar Origen </label>
                                        <select name="nombre_origen"  class="form-control" required>
                                            <option disabled selected >Lugar de Origen</option>
                                            <?php
                                                $query = $mysqli -> query ("SELECT * FROM origen");
                                                while ($valorOrigen = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            ?>
                                                    <option required value="<?php echo $valorOrigen['codigoOrigen'] ?>" > <?php echo $valorOrigen['nombreOrigen'] ?> </option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Lugar Destino</label>
                                        <select name="nombre_destino" class="form-control" required>
                                            <option disabled selected >Lugar de Destino</option>
                                            <?php
                                                $query = $mysqli -> query ("SELECT * FROM destino");
                                                while ($valorDestino = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            ?>
                                                    <option required value="<?php echo $valorDestino['codigoDestino'] ?>" > <?php echo $valorDestino['nombreDestino'] ?> </option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Otros datos del Origen (Opcional)</label>
                                        <textarea name="datosOrigen" class="form-control"
                                            id="exampleFormControlTextarea1" placeholder="Datos adicionales"
                                            rows="2"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Otros datos del Destino (Opcional)</label>
                                        <textarea name="datosDestino" class="form-control"
                                            id="exampleFormControlTextarea1" placeholder="Datos adicionales"
                                            rows="2"></textarea>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3 ">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Acepta Términos y
                                            Condiciones</label>
                                    </div>
                                </div>
                                <!-- Boton de enviar los datos -->
                                <button type="submit" name="add_registro_viaje" class="btn btn-block btn-success py-3 px-5  ">
                                    <strong>Siguiente ➡</strong></button>

                                <input type="hidden" name="id_usuario" value="<?Php echo"$IDUser";?>">
                            </form>
                            <!-- fin formulario -->
                        </div>
                    </div>
                    <!--Fin de la ventana principal -->
                </div>
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

    <!-- Alert -->
    <script>
    function alertSave() {
        alert("¡Los Datos se han guardado satisfactoriamente 👍🏽!");
    }
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