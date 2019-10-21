<?php
session_start();
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

        //
        if ($sql) {
            header('Location: registro.php');
            }
     

        //Datos del Destino
        $codDestino = $_POST['codDestino'];
        $nombreDestino = $_POST['nombreDestino'];
        $datosOrigen = $_POST['datosOrigen'];

        //Insertar datos en la tabla destino
        $sql = "INSERT INTO destino (codigoDestino, nombreDestino, datosDestino)
                values('$codDestino','$nombreDestino','$datosOrigen')";
        $consulta =  mysqli_query($conn, $sql);

        //Datos del Origen
        $codOrigen = $_POST['codOrigen'];
        $nombreOrigen = $_POST['nombreOrigen'];
        $datosDestino = $_POST['datosDestino'];     
        
        //Insertar datos en la tabla Origen
        $sql = "INSERT INTO origen (codigoOrigen, nombreOrigen, datosOrigen)
                values('$codOrigen','$nombreOrigen','$datosDestino')";
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


    }##

?>