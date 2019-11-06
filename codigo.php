<?php
        include_once 'conexion.php';


//          // REGISTRO DE LA INFORMACION
//         if (isset($_POST['addInfo_btn'])) {

//         //Datos del viajero
//         $cedulaV = $_POST['cedula'];
//         $nombreV = $_POST['nombre'];
//         $direccionV = $_POST['direccion'];
//         $telefonoV = $_POST['telfono'];

//         //Insertar datos en la tabla viajero
//         $sql = "INSERT INTO viajero (cedula, nombre, direccion, telefono)
//                 values('$cedulaV','$nombreV','$direccionV','$telefonoV')";
//         $consulta =  mysqli_query($conn, $sql);

//         //Devuelve a la pagina
//         if ($sql) {
//             header('Location: registro.php');
//             }

//         //Datos del Destino
//         $codDestino = $_POST['codDestino'];
//         $nombreDestino = $_POST['nombreDestino'];
//         $datosOrigen = $_POST['datosOrigen'];

//         //Insertar datos en la tabla destino
//         $sql = "INSERT INTO destino (cedulaViajero, codigoDestino, nombreDestino, datosDestino)
//                 values('$cedulaV','$codDestino','$nombreDestino','$datosOrigen')";
//         $consulta =  mysqli_query($conn, $sql);

//         //Datos del Origen
//         $codOrigen = $_POST['codOrigen'];
//         $nombreOrigen = $_POST['nombreOrigen'];
//         $datosDestino = $_POST['datosDestino'];

//         //Insertar datos en la tabla Origen
//         $sql = "INSERT INTO origen (cedulaViajero,codigoOrigen, nombreOrigen, datosOrigen)
//                 values('$cedulaV','$codOrigen','$nombreOrigen','$datosDestino')";
//         $consulta =  mysqli_query($conn, $sql);

//         //Datos del viaje
//         $codViaje = $_POST['codViaje'];
//         $numAsientosV = $_POST['numAsientos'];
//         $costoV = $_POST['costo'];
//         $fechaV = $_POST['fecha'];
//         $horaV = $_POST['hora'];

//         //Insertar datos en la tabla viaje
//         $sql = "INSERT INTO viajes (codigoViaje, numAsientos, costo, fecha, hora, cedulaViajero, codigo_Origen, codigo_Destino)
//                 values('$codViaje','$numAsientosV','$costoV','$fechaV','$horaV','$cedulaV','$codOrigen','$codDestino')";
//         $consulta =  mysqli_query($conn, $sql);

//         //Datos de la RESERVACION
//         $codReservacion = $_POST['codReservacion'];
//         $fechaReservacion = $_POST['fechaReservacion'];
//         $estado = $_POST['estado'];
//         $cedulaV = $_POST['cedula'];

//         //Insertar datos en la tabla reservacion
//         $sql = "INSERT INTO reservacion (cedViajero,codigoReservacion, fecha, estado)
//                 values('$cedulaV','$codReservacion','$fechaReservacion','$estado')";
//         $consulta =  mysqli_query($conn, $sql);

//     }##

//         //Buscar Datos del viajero
//         @$buscar = $_POST["buscarViajero_x"];
//         @$cv = $_POST["cedula_viajero"];
//         @$cedV = $_POST["cedula"];
//         @$nombre = $_POST["nombre"];
//         @$direccion = $_POST["direccion"];
//         @$telfono = $_POST["telfono"];
//         @$codViaje = $_POST["codViaje"];
//         @$numAsientos = $_POST["numAsientos"];
//         @$costo = $_POST["costo"];
//         @$fecha = $_POST["fecha"];
//         @$hora = $_POST["hora"];
//         @$codOrigen = $_POST["codOrigen"];
//         @$nombreOrigen = $_POST["nombreOrigen"];
//         @$datosOrigen = $_POST["datosOrigen"];
//         @$codDestino = $_POST["codDestino"];
//         @$nombreDestino = $_POST["nombreDestino"];
//         @$datosDestino = $_POST["datosDestino"];
//         @$codReservacion = $_POST["codReservacion"];
//         @$fechaReservacion = $_POST["fechaReservacion"];
//         @$estado = $_POST["estado"];

//         if (@$buscar) {
//                 $cv = $_POST["cedula_viajero"];
//                 $sql = "SELECT * FROM viajero where cedula ='$cv' ";

//                 //Viajero
//                 $consulta =  mysqli_query($conn, $sql);
//                 $fila = mysqli_num_rows($consulta);

//                 if ($fila) {
//                         while ($registro = mysqli_fetch_assoc($consulta)) {
//                                 $cedV=$registro["cedula"];
//                                 $nombre=$registro["nombre"];
//                                 $direccion=$registro["direccion"];
//                                 $telfono=$registro["telefono"];
//                         }
//                 }

//         }#

//         //Viaje
//         if (@$buscar) {
//                 $cv = $_POST["cedula_viajero"];
//                 $sql = "SELECT * FROM viajes where cedulaViajero ='$cv' ";
//                 $consult =  mysqli_query($conn, $sql);
//                 @$filas = mysqli_num_rows($consult);

//                 if ($filas) {
//                         while ($registro = mysqli_fetch_assoc($consult)) {
//                                 $codViaje=$registro["codigoViaje"];
//                                 $numAsientos=$registro["numAsientos"];
//                                 $costo=$registro["costo"];
//                                 $fecha=$registro["fecha"];
//                                 $hora=$registro["hora"];
//                         }
//                 }
//         }#

//         //Origen
//         if (@$buscar) {
//                 $cv = $_POST["cedula_viajero"];
//                 $sql = "SELECT * FROM origen where cedulaViajero ='$cv' ";
//                 $consulta =  mysqli_query($conn, $sql);
//                 $fila = mysqli_num_rows($consulta);

//                 if ($fila) {
//                         while ($registro = mysqli_fetch_assoc($consulta)) {
//                                 $codOrigen=$registro["codigoOrigen"];
//                                 $nombreOrigen=$registro["nombreOrigen"];
//                                 $datosOrigen=$registro["datosOrigen"];
//                         }
//                 }

//         }#

//         //Destino
//         if (@$buscar) {
//                 $cv = $_POST["cedula_viajero"];
//                 $sql = "SELECT * FROM destino where cedulaViajero ='$cv' ";
//                 $consulta =  mysqli_query($conn, $sql);
//                 $fila = mysqli_num_rows($consulta);

//                 if ($fila) {
//                         while ($registro = mysqli_fetch_assoc($consulta)) {
//                                 $codDestino=$registro["codigoDestino"];
//                                 $nombreDestino=$registro["nombreDestino"];
//                                 $datosDestino=$registro["datosDestino"];
//                         }
//                 }

//         }#

//         //Reservacion
//         if (@$buscar) {
//                 $cv = $_POST["cedula_viajero"];
//                 $sql = "SELECT * FROM reservacion where cedViajero ='$cv' ";
//                 $consulta =  mysqli_query($conn, $sql);
//                 $fila = mysqli_num_rows($consulta);

//                 if ($fila) {
//                         while ($registro = mysqli_fetch_assoc($consulta)) {
//                                 $codReservacion=$registro["codigoReservacion"];
//                                 $fechaReservacion=$registro["fecha"];
//                                 $estado=$registro["estado"];
//                         }
//                 }
//         }#


         //  Recibo los datos del index para el registroViaje.php
        if (isset($_POST["btn_index"])) {

                $fechaSalida_index = $_POST['fechaSalida'];
                $fechaRegreso_index = $_POST['fechaRegreso'];
                $lugarOrigen = $_POST['origen'];
                $lugarDestino = $_POST['destino'];
                $cant_asientos = $_POST['cant_asientos'];

                //Mostrar el nombre del origen en registroViaje
                $sql = "SELECT * FROM origen where codigoOrigen ='$lugarOrigen' ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $lugarOri=$registro["nombreOrigen"];
                        }
                }

                //Mostrar el nombre del destino en registroViaje
                $sql = "SELECT * FROM destino where codigodestino ='$lugarDestino' ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $lugarDesti=$registro["nombreDestino"];
                        }
                }
        }else {
                $fechaSalida_index = "";
                $fechaRegreso_index = "";
                $cant_asientos = "";
                $lugarDesti = "";
                $lugarOri= "";
        }


        //  RegistroViajes
        if (isset($_POST['add_btn'])) {

                //Datos del Viaje
                $codigoViaje = $_POST['codigoViaje'];
                $horaV = $_POST['hora'];
                $costoV = $_POST['costoV'];
                $cantidadAsientos = $_POST['cantidadAsientos'];
                $fechaSalida = $_POST['fechaSalida'];
                $fechaRegreso = $_POST['fechaRegreso'];

                //Datos del Destino
                $lugaDestino = $_POST['lugaDestino'];

                //Datos del Origen
                $lugaOrigen = $_POST['lugaOrigen'];
                //$ced = $_SESSION["id_cedulaUser"];

                //Insertar datos en la tabla viaje
                $sql = "INSERT INTO viajes (codigoViaje, numAsientos, costoViaje, fechaSalida,fechaRegreso, horaViaje, codigo_Origen, codigo_Destino)
                values('$codigoViaje','$cantidadAsientos','$costoV','$fechaSalida','$fechaRegreso','$horaV','$lugaOrigen','$lugaDestino')";
                $consulta =  mysqli_query($conn, $sql);

                //Envia el codigo de viaje a Login de forma oculta
                if ($sql) {
                        $sql = "SELECT * FROM viajes where codigoViaje ='$codigoViaje' ";
                        $consulta =  mysqli_query($conn, $sql);
                        $fila = mysqli_num_rows($consulta);

                        if ($fila) {
                                while ($registro = mysqli_fetch_assoc($consulta)) {
                                        $codViaje = $registro["codigoViaje"];
                                }
                        }
                }else if ($sql) {
                 header('Location: checkout.php');
                }
        }

         //  Datos del formulario de Registro de viaje del usuario
         if (isset($_POST['add_registro_viaje'])) {

                //Datos del Viaje
                $codigo_viaje = $_POST['codigo_viaje'];
                $hora_viaje = $_POST['hora_viaje'];
                $precio_viaje = $_POST['precio_viaje'];
                $canti_asientos = $_POST['canti_asientos'];
                $fecha_salida = $_POST['fecha_salida'];
                $fecha_regreso = $_POST['fecha_regreso'];

                //Datos del Destino
                $nombre_destino = $_POST['nombre_destino'];

                //Datos del Origen
                $nombre_origen = $_POST['nombre_origen'];

                //Insertar datos en la tabla viaje
                $sql = "INSERT INTO viajes (codigoViaje, numAsientos, costoViaje, fechaSalida,fechaRegreso, horaViaje, codigo_Origen, codigo_Destino)
                values('$codigo_viaje','$canti_asientos','$precio_viaje','$fecha_salida','$fecha_regreso','$hora_viaje','$nombre_origen','$nombre_origen')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: checkout.php');
                }

                 //Envia el codigo de viaje a Login de forma oculta
                //  if ($sql) {
                //         $sql = "SELECT * FROM viajes where codigoViaje ='$codigo_viaje' ";
                //         $consulta =  mysqli_query($conn, $sql);
                //         $fila = mysqli_num_rows($consulta);

                //         if ($fila) {
                //                 while ($registro = mysqli_fetch_assoc($consulta)) {
                //                         $codig_viaje = $registro["codigoViaje"];
                //                 }
                //         }
                // }else if ($sql) {
                //  header('Location: checkout.php');
                // }
        }





        //  Datos de la reservacion del usuario
        if (isset($_POST['btn_add_reservacion'])) {
                $codigoReservacion = $_POST['codigoReservacion'];
                $fechaReservacion = $_POST['fechaReservacion'];
                $inlineRadioOptions = $_POST['inlineRadioOptions'];
                $ced_Usuario = $_POST['ced_Usuario'];

                $sql = "INSERT INTO reservacion (codigoReservacion, fechaReservacion, estadoReservacion, cedula_viajero)
                values('$codigoReservacion','$fechaReservacion','$inlineRadioOptions','$ced_Usuario')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: informe.php');
                 }

        }

         //  Actualiza datos del perfil del usuario
         if (isset($_POST['btn_perfildata'])) {
                $idxUsuario = $_POST['idxUsuario'];

                $nombreU = $_POST['nombreU'];
                $direccionU = $_POST['direccionU'];
                $telefonoU = $_POST['telefonoU'];

                $usernombU = $_POST['usernombU'];
                $contrase = $_POST['contrase'];
                $cedulaU = $_POST['cedulaU'];

                $sql = "UPDATE usuarios SET cedulaUser='$cedulaU',username='$usernombU', passwor='$contrase', nombre='$nombreU', direccion='$direccionU', telefono='$telefonoU' 
                        WHERE id = '$idxUsuario' ";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: perfilUser.php');
                 }

        }

?>