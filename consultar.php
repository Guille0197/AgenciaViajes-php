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
    <?php include("verificar.php"); ?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sun Side 🌞</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-dark"><?php  echo "$nombreUser";?></a></li>
                    <li class="nav-item active"><a href="cerrar.php" class="nav-link">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Consultar Viajero</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container bg-light p-4">
        <div class="row">
            <div class="col-3">
                <div class="text-dark nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class=" text-dark nav-link" href="registro.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><strong>Registrar Datos 📌</strong></a>
                    <a class="text-dark nav-link active"  href="consultar.php" role="tab" aria-controls="v-pills-messages" aria-selected="false"><strong>Consultar Viajero 👨🏽‍</strong></a>
                    <a class=" text-dark nav-link" href="informe.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><strong>Mostrar Informe 📊</strong></a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <!-- Buscar viajero -->
                    <form action="consultar.php" method="POST" > 
                    <?php include("codigo.php"); ?> <!-- Importo el archivo con todo el codigo php -->
                        <div class="float-right">
                                <div class="form-inline form-group mx-sm-3 mb-2">
                                    <input type="text" class="form-control" name="cedula_viajero" placeholder=" Ingrese Cédula del Viajero">
                                    <div class="p-1">
                                        <input type="Image" name="buscarViajero" src="images/buscar.png" value="<?php echo $Fila ?>" class="btn btn-primary mb-2 "> 
                                    </div>
                                </div>
                        </div>
                    </form>
                    <br><br>
                    
                        <div class="p-4">
                            <h2>Datos del Viajero 👨🏽‍</h2> <hr> 
                            <!-- Formulario -->
                            <form action="codigo.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Cédula</label>
                                        <input type="text"  name="cedula" class="form-control" value="<?php echo $cedV ?>" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre ?>" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Dirección</label>
                                        <input type="text" name="direccion" class="form-control" value="<?php echo $direccion ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Teléfono</label>
                                         <input type="phone" name="telfono" class="form-control" value="<?php echo $telfono ?>">
                                    </div>
                                </div>

                                <h2>Datos del Viaje ✈</h2> <hr>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Código de viaje</label>
                                            <input type="text" name="codViaje" class="form-control" value="<?php echo $codViaje ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Número de asientos</label>
                                            <input type="number" name="numAsientos" class="form-control" value="<?php echo $numAsientos ?>" max="100" min="1">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Costo del viaje</label>
                                            <input type="number" name="costo" class="form-control"  value="<?php echo $costo ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Fecha</label>
                                            <input type="text" name="fecha" class="form-control checkin_date" value="<?php echo $fecha ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hora</label>
                                            <input type="text" name="hora" class="form-control" id="timepicker" value="<?php echo $hora ?>"/>
                                        </div>
                                    </div>

                                <h2>Datos del Lugar 🌎</h2> <hr>
                                <h3>Origen</h3>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Código </label>
                                            <input type="number" name="codOrigen" class="form-control" value="<?php echo $codOrigen ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombre del lugar</label>
                                            <input type="text" name="nombreOrigen" class="form-control" value="<?php echo $nombreOrigen ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Otros datos</label>
                                            <textarea type="text" name="datosOrigen" class="form-control" rows="2"> <?php echo $datosOrigen ?> </textarea>
                                        </div>
                                    </div>

                                <h3>Destino</h3>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Código </label>
                                            <input type="number" name="codDestino" class="form-control" value="<?php echo $codDestino ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombre del lugar</label>
                                            <input type="text" name="nombreDestino" class="form-control" value="<?php echo $nombreDestino ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Otros datos</label>
                                            <textarea type="text" name="datosDestino" class="form-control" rows="2"> <?php echo $datosDestino ?> </textarea>
                                        </div>
                                    </div>

                                    <!--Reservacion  -->
                                    <h2>Reservación 🧳</h2> <hr>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Código de reservación</label>
                                            <input type="text" name="codReservacion" class="form-control"  value="<?php echo $codReservacion ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Fecha</label>
                                            <input type="text" name="fechaReservacion" class="form-control checkin_date"  value="<?php echo $fechaReservacion ?>">
                                        </div>
                                       <div class="p-4">
                                       <label>Estado de la Reservación</label> <br>
                                            <input type="text" name="estado" class="form-control"  value="<?php echo $estado ?>">                                        
                                       </div>
                                    </div>
                                <!-- Boton de enviar los datos -->
                                <!-- <button type="submit" name="addInfo_btn" class="btn btn-block btn-success py-3 px-5 " onclick="alertSave()"> <strong>Enviar Datos</strong></button> -->
                            </form>
                            <!-- fin formulario -->
                        </div>  
                    </div> <!--Fin de la ventana principal -->
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
                        </script>
                         All rights reserved Sun Side🌞 | The Project made <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://github.com/Guille0197/AgenciaViajes-php" target="_blank">Guillermo Navarro</a>
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