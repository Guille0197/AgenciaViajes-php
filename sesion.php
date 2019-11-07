<?php 
  include_once 'conexion.php';
  include_once 'codigo.php';

  if(!isset($_SESSION)) {
    session_start();
  }

  //formulario de Registro
  if (isset($_POST['addlogin'])) {
    $nombreUsuario = $_POST['nombreUsuario'];
    $cedula = $_POST['cedula'];
    $contraseña = $_POST['pass'];
    $nombreUser = $_POST['nombr'];
    $rol_Usuario = $_POST['rol_Usuario'];
    $codigoViajero = $_POST['codViajero'];

    //Insertar datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (cedulaUser,username, passwor, nombre,codViaje, rol_id )
    values('$cedula','$nombreUsuario','$contraseña','$nombreUser','$codigoViajero','$rol_Usuario')";
    $consulta =  mysqli_query($conn, $sql);
  }

  //Envia del checkout a informe
    if (isset($_POST['btn_checkout'])) {  
      $precioTotal = $_POST["precioTotal"];
      $codX = $_POST["codX"];
      $telf = $_POST["telf"];
      $address = $_POST["address"];
      $username = $_POST["usernamex"];

  //Insertar datos en la tabla viajes el costo total 
    $sql = "UPDATE viajes SET costoViaje = '$precioTotal' WHERE codigoViaje = '$codX' ";
    $consulta =  mysqli_query($conn, $sql);

    //Insertar datos en la tabla usuarios (Direccion, telefono)
    $sql = "UPDATE usuarios SET  direccion='$address', telefono='$telf' WHERE username = '$username' ";
    $consulta =  mysqli_query($conn, $sql);

      if ($sql) {
              header('Location: informe.php');
      }
      ?> 
        <script>
            function checkout(){
                alert("¡GRACIAS! EL pago del viaje sea realizado correctamente ✈😍 ");
            }
        </script>
      <?php
    }

    //Envia del checkout2 a informe
    if (isset($_POST['btn_checkout2'])) {  
      $priceTotal = $_POST["priceTotal"];
      $codiV = $_POST["codiV"];

  //Insertar datos en la tabla viajes el costo total 
    $sql = "UPDATE viaje2 SET costo_Viaje = '$priceTotal' WHERE codigo_Viaje = '$codiV' ";
    $consulta =  mysqli_query($conn, $sql);

      if ($sql) {
              header('Location: informe.php');
      }
      ?> 
        <script>
            function checkout(){
                alert("¡GRACIAS! EL pago del viaje sea realizado correctamente ✈😍 ");
            }
        </script>
      <?php
    }

  //Inicia Sesion del usuario registrado
  if (isset($_POST['addlogin'])) {
    $username = $_POST["nombreUsuario"];
    $password = $_POST["pass"];

    $sql="SELECT * FROM usuarios WHERE username='$username' and passwor ='$password'";
    $result = mysqli_query($conn, $sql);

    $registro = mysqli_fetch_array($result);
    $rol = $registro[8];

    if ($registro) { 
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"] = $registro["username"];
      $_SESSION["id_nombre"] = $registro["nombre"];
      $_SESSION["id_cedulaUser"] = $registro["cedulaUser"];
      $_SESSION["id_codViaje"] = $registro["codViaje"];

      $_SESSION["id_direccion"] = $registro["direccion"];
      $_SESSION["id_telefono"] = $registro["telefono"];
      $_SESSION["id_pass"] = $registro["passwor"];
      $_SESSION["id"] = $registro["id"];


      if($_SESSION['rol'] == 2){
          header('Location: checkout.php');
      }
    }else{ ?>
        <script lenguage=javascript>
        alert("⚠ ¡ERROR! ⚠");
        window.location="login.php";
      </script>
        
   <?php 
      }
  }
    
  //formulario de iniciar sesion 
  if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="SELECT * FROM usuarios WHERE username='$username' and passwor ='$password'";
    $result = mysqli_query($conn, $sql);

    $registro = mysqli_fetch_array($result);
    $rol = $registro[8];

    if ($registro) { 
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"]=$registro["username"];
      $_SESSION["id_nombre"]=$registro["nombre"];
      $_SESSION["id_cedulaUser"]=$registro["cedulaUser"];
      $_SESSION["id_codViaje"] = $registro["codViaje"];
      $_SESSION["id_direccion"] = $registro["direccion"];
      $_SESSION["id_telefono"] = $registro["telefono"];
      $_SESSION["id_pass"] = $registro["passwor"];
      $_SESSION["id"] = $registro["id"];

      switch($_SESSION['rol']){
        case 1:
          header('Location: dashboards/index.php');
        break;

        case 2:
            header('Location: registro.php');
        break;

        default;
      }
    }else if (!$registro[0]) {?>
      <script lenguage=javascript>
        alert("⚠ ERROR: Usuario y/o Contraseña Incorrecta ⚠");
        window.location="login.php";
      </script> 
        
   <?php 
      }
    
  }



?>

