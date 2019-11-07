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

         //  Datos del formulario de Registro de viaje dentro del usuario ****
         if (isset($_POST['add_registro_viaje'])) {

                //Datos del Viaje
                $codigo_viaje = $_POST['codigo_viaje'];
                $hora_viaje = $_POST['hora_viaje'];
                $precio_viaje = $_POST['precio_viaje'];
                $canti_asientos = $_POST['canti_asientos'];
                $fecha_salida = $_POST['fecha_salida'];
                $fecha_regreso = $_POST['fecha_regreso'];

                //cedula
                $id_usuario = $_POST['id_usuario'];

                //Datos del Destino
                $nombre_destino = $_POST['nombre_destino'];

                //Datos del Origen
                $nombre_origen = $_POST['nombre_origen'];

                //Insertar datos en la tabla viaje ***
                $sql = "INSERT INTO viaje2 (codigo_Viaje, num_Asientos, costo_Viaje, fecha_Salida,fecha_Regreso, hora_Viaje, cod_Origen, cod_Destino, ced_Viajero)
                values('$codigo_viaje','$canti_asientos','$precio_viaje','$fecha_salida','$fecha_regreso','$hora_viaje','$nombre_origen','$nombre_destino','$id_usuario')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: checkout2.php');
                }
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
                        header('Location: reservacion.php');
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

        //  Ingresa el nuevo usuario administador
        if (isset($_POST['btn_admin'])) {
                $userAdmin = $_POST['userAdmin'];
                $nombreAdmin = $_POST['nombreAdmin'];
                $cedulaAdmin = $_POST['cedulaAdmin'];
                $passwordAdmin = $_POST['passwordAdmin'];
                $rol_Usuario = $_POST['rol_Usuario'];
                $codV_admin = 7307;

                $sql = "INSERT INTO usuarios (cedulaUser,username, passwor, nombre,codViaje, rol_id )
                values('$cedulaAdmin','$userAdmin','$passwordAdmin','$nombreAdmin','$codV_admin','$rol_Usuario')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: dashboards/registrarAdmin.php');
                 }

        }

    // Borrar Usuario administrador
    if (isset($_POST['delete_btn'])) {

        $id = $_POST['delete_id'];

        $sql =  "DELETE FROM usuarios WHERE cedulaUser='$id' ";
        $consulta =  mysqli_query($conn, $sql);

        if ($sql ) {
            header('Location: dashboards/registrarAdmin.php');
        }
        else {
            header('Location: ../codigo.php');
        }

    }#

    // Actualizar los datos del usuario administrador
    if (isset($_POST['updatebtnAdmin'])) {

        $id = $_POST['edits_id'];
        $username = $_POST['edit_username'];
        $nombre = $_POST['edit_nombre'];
        $cedula = $_POST['edit_cedula'];
        $password = $_POST['edit_password'];
        $usertype = $_POST['update_usertype'];

        $query =  "UPDATE usuarios SET username ='$username', nombre ='$nombre', passwor ='$password', cedulaUser ='$cedula', rol_id ='$usertype' WHERE cedulaUser ='$id' AND rol_id = 1 ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location: dashboards/registrarAdmin.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location: codigo.php');
        }
    }#

        //  Ingresa el nuevo Origen
        if (isset($_POST['btn_origen'])) {
                $nombre_Origen = $_POST['nombre_Origen'];
                $codigo_Origen = $_POST['codigo_Origen'];

                $sql = "INSERT INTO origen (codigoOrigen,nombreOrigen )
                values('$codigo_Origen','$nombre_Origen')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: dashboards/origen.php');
                }

        }

    // Actualizar los datos del Origen
    if (isset($_POST['updatebtnOrigen'])) {

        $id = $_POST['id'];
        $edit_nomOrigen = $_POST['edit_nomOrigen'];
        $codO = $_POST['codOrigen'];

        $query =  "UPDATE origen SET codigoOrigen ='$codO', nombreOrigen ='$edit_nomOrigen' WHERE codigoOrigen ='$id' ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location: dashboards/origen.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location: codigo.php');
        }
    }

      // Borrar Origen
      if (isset($_POST['delete_btnO'])) {

        $id = $_POST['delete_idO'];

        $sql =  "DELETE FROM origen WHERE codigoOrigen='$id' ";
        $consulta =  mysqli_query($conn, $sql);

        if ($sql ) {
            header('Location: dashboards/origen.php');
        }
        else {
            header('Location: ../codigo.php');
        }

    }#

    //  Ingresa el nuevo destino
        if (isset($_POST['btn_destino'])) {
                $nombre_Destino = $_POST['nombre_Destino'];
                $codigo_Destino = $_POST['codigo_Destino'];

                $sql = "INSERT INTO destino (codigoDestino,nombreDestino )
                values('$codigo_Destino','$nombre_Destino')";
                $consulta =  mysqli_query($conn, $sql);

                if ($sql) {
                        header('Location: dashboards/destino.php');
                }

        }

    // Actualizar los datos del destino
    if (isset($_POST['updatebtnDestino'])) {

        $id = $_POST['id'];
        $edit_nomOrigen = $_POST['edit_nomOrigen'];
        $codO = $_POST['codOrigen'];

        $query =  "UPDATE destino SET codigoDestino ='$codO', nombreDestino ='$edit_nomOrigen' WHERE codigoDestino ='$id' ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location: dashboards/destino.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location: codigo.php');
        }
    }

     // Borrar Destino
     if (isset($_POST['delete_btnD'])) {

        $id = $_POST['delete_idD'];

        $sql =  "DELETE FROM destino WHERE codigoDestino='$id' ";
        $consulta =  mysqli_query($conn, $sql);

        if ($sql ) {
            header('Location: dashboards/destino.php');
        }
        else {
            header('Location: ../codigo.php');
        }

    }#

?>