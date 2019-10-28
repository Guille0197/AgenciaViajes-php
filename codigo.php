<?php
$conn = mysqli_connect("localhost", "root", "", "bd_agenciaViaje");

    // REGISTRO DE LA INFORMACION 
    if (isset($_POST['addInfo_btn'])) {

        //Datos del viajero
        $cedulaV = $_POST['cedula'];
        $nombreV = $_POST['nombre'];
        $direccionV = $_POST['direccion'];
        $telefonoV = $_POST['telfono'];

        //Insertar datos en la tabla viajero
        $sql = "INSERT INTO viajero (cedula, nombre, direccion, telefono)
                values('$cedulaV','$nombreV','$direccionV','$telefonoV')";
        $consulta =  mysqli_query($conn, $sql);

        //Devuelve a la pagina 
        if ($sql) {
            header('Location: registro.php');
            }
     
        //Datos del Destino
        $codDestino = $_POST['codDestino'];
        $nombreDestino = $_POST['nombreDestino'];
        $datosOrigen = $_POST['datosOrigen'];

        //Insertar datos en la tabla destino
        $sql = "INSERT INTO destino (cedulaViajero, codigoDestino, nombreDestino, datosDestino)
                values('$cedulaV','$codDestino','$nombreDestino','$datosOrigen')";
        $consulta =  mysqli_query($conn, $sql);

        //Datos del Origen
        $codOrigen = $_POST['codOrigen'];
        $nombreOrigen = $_POST['nombreOrigen'];
        $datosDestino = $_POST['datosDestino'];     
        
        //Insertar datos en la tabla Origen
        $sql = "INSERT INTO origen (cedulaViajero,codigoOrigen, nombreOrigen, datosOrigen)
                values('$cedulaV','$codOrigen','$nombreOrigen','$datosDestino')";
        $consulta =  mysqli_query($conn, $sql);

        //Datos del viaje
        $codViaje = $_POST['codViaje'];
        $numAsientosV = $_POST['numAsientos'];
        $costoV = $_POST['costo'];
        $fechaV = $_POST['fecha'];
        $horaV = $_POST['hora'];
        
        //Insertar datos en la tabla viaje
        $sql = "INSERT INTO viajes (codigoViaje, numAsientos, costo, fecha, hora, cedulaViajero, codigo_Origen, codigo_Destino)
                values('$codViaje','$numAsientosV','$costoV','$fechaV','$horaV','$cedulaV','$codOrigen','$codDestino')";
        $consulta =  mysqli_query($conn, $sql);

        //Datos de la RESERVACION
        $codReservacion = $_POST['codReservacion'];
        $fechaReservacion = $_POST['fechaReservacion'];
        $estado = $_POST['estado'];
        $cedulaV = $_POST['cedula'];

        //Insertar datos en la tabla reservacion
        $sql = "INSERT INTO reservacion (cedViajero,codigoReservacion, fecha, estado)
                values('$cedulaV','$codReservacion','$fechaReservacion','$estado')";
        $consulta =  mysqli_query($conn, $sql);

    }##

        //Buscar Datos del viajero         
        @$buscar = $_POST["buscarViajero_x"];
        @$cv = $_POST["cedula_viajero"];
        @$cedV = $_POST["cedula"];
        @$nombre = $_POST["nombre"];
        @$direccion = $_POST["direccion"];
        @$telfono = $_POST["telfono"];
        @$codViaje = $_POST["codViaje"];
        @$numAsientos = $_POST["numAsientos"];
        @$costo = $_POST["costo"];
        @$fecha = $_POST["fecha"];
        @$hora = $_POST["hora"];
        @$codOrigen = $_POST["codOrigen"];
        @$nombreOrigen = $_POST["nombreOrigen"];
        @$datosOrigen = $_POST["datosOrigen"];
        @$codDestino = $_POST["codDestino"];
        @$nombreDestino = $_POST["nombreDestino"];
        @$datosDestino = $_POST["datosDestino"];
        @$codReservacion = $_POST["codReservacion"];
        @$fechaReservacion = $_POST["fechaReservacion"];
        @$estado = $_POST["estado"];

        if (@$buscar) {                
                $cv = $_POST["cedula_viajero"];
                $sql = "SELECT * FROM viajero where cedula ='$cv' ";

                //Viajero
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $cedV=$registro["cedula"];
                                $nombre=$registro["nombre"];
                                $direccion=$registro["direccion"];
                                $telfono=$registro["telefono"];
                        }
                }
                
        }#

        //Viaje
        if (@$buscar) {               
                $cv = $_POST["cedula_viajero"];
                $sql = "SELECT * FROM viajes where cedulaViajero ='$cv' ";
                $consult =  mysqli_query($conn, $sql);
                @$filas = mysqli_num_rows($consult);

                if ($filas) {
                        while ($registro = mysqli_fetch_assoc($consult)) {
                                $codViaje=$registro["codigoViaje"];
                                $numAsientos=$registro["numAsientos"];
                                $costo=$registro["costo"];
                                $fecha=$registro["fecha"];
                                $hora=$registro["hora"];
                        }
                }
        }#

        //Origen
        if (@$buscar) {               
                $cv = $_POST["cedula_viajero"];
                $sql = "SELECT * FROM origen where cedulaViajero ='$cv' ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $codOrigen=$registro["codigoOrigen"];
                                $nombreOrigen=$registro["nombreOrigen"];
                                $datosOrigen=$registro["datosOrigen"];
                        }
                }

        }#

        //Destino
        if (@$buscar) {               
                $cv = $_POST["cedula_viajero"];
                $sql = "SELECT * FROM destino where cedulaViajero ='$cv' ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $codDestino=$registro["codigoDestino"];
                                $nombreDestino=$registro["nombreDestino"];
                                $datosDestino=$registro["datosDestino"];
                        }
                }

        }#

        //Reservacion
        if (@$buscar) {               
                $cv = $_POST["cedula_viajero"];
                $sql = "SELECT * FROM reservacion where cedViajero ='$cv' ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);

                if ($fila) {
                        while ($registro = mysqli_fetch_assoc($consulta)) {
                                $codReservacion=$registro["codigoReservacion"];
                                $fechaReservacion=$registro["fecha"];
                                $estado=$registro["estado"];
                        }
                }
        }#

        //  Booking
        // if (isset($_POST['btn_index'])) {

        //         $fechaSalid = $_POST["fechaSalida"];
        //         $fechaRegres = $_POST["fechaRegreso"];

         //Insertar datos en la tabla viajes
        // $sql = "INSERT INTO viajes (fechaSalida, fechaRegreso)
        //         values('$fechaSalid','$fechaRegres')";
        // $consulta =  mysqli_query($conn, $sql);


        // if ($conn->query($sql) === TRUE) {
        //              echo "New record created successfully";
        //          } else {
        //              echo "Error: " . $sql . "<br>" . $conn->error;
        //          }

        // //Devuelve a la pagina 
        // if ($sql) {
        //     header('Location: registroViaje.php');
        //     }

                
                #$valorOrigen = $_POST["valorOrigen"];
                #$valorDestino = $_POST["valorDestino"];

        #}


        
        // $sql = "SELECT * FROM viajes ";
        // $consulta =  mysqli_query($conn, $sql);
        // $fila = mysqli_num_rows($consulta);
        

        //         if ($fila) {
        //                 while ($registro = mysqli_fetch_assoc($consulta)) {
        //                         $fechaSalid=$registro["fechaSalida"];
        //                         $fechaRegres=$registro["fechaRegreso"];

        //                 }
        //         }


        //  Booking
        if (isset($_POST['btn_index'])) {
                $fechaSalida_index = $_POST['fechaSalida'];
                $fechaRegreso_index = $_POST['fechaRegreso'];
                $lugarOrigen = $_POST['origen'];
                $lugarDestino = $_POST['destino'];
                
                //Insertar datos en la tabla fechasviajes
                $sql = "INSERT INTO fechasviajes (fechaSalida, fechaRegreso)
                        values('$fechaSalida_index','$fechaRegreso_index')";
                $consulta =  mysqli_query($conn, $sql);

                //Devuelve a la pagina 
                if ($sql) {
                        header('Location: registroViaje.php');
                }  
        }//

                

        
        //Muestra las fechas en registroViaje.php
                $sql = "SELECT * FROM fechasviajes ";
                $consulta =  mysqli_query($conn, $sql);
                $fila = mysqli_num_rows($consulta);
                
                        if ($fila) {
                                while ($registro = mysqli_fetch_assoc($consulta)) {
                                        $fechaSalida=$registro["fechaSalida"];
                                        $fechaRegreso=$registro["fechaRegreso"];

                                }
                        }

                        
        /*if (isset($_POST['origen'])) {

                $lugarOrigen = $_POST['origen'];
        }
        if (isset($_POST['destino'])) {

                $lugarDestino = $_POST['destino'];
        }*/
        
        


?>