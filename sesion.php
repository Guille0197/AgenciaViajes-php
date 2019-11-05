<?php 
  include_once 'conexion.php';

  if(!isset($_SESSION)) {
    session_start();
  }

  //formulario de Registrarse
 
  if (isset($_POST['addlogin'])) {
    $nombreUsuario = $_POST['nombreUsuario'];
    $cedula = $_POST['cedula'];
    $contraseña = $_POST['pass'];
    $nombreUser = $_POST['nombr'];
    $rol_Usuario = $_POST['rol_Usuario'];

    //Insertar datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (cedulaUser,username, passwor, nombre, rol_id )
    values('$cedula','$nombreUsuario','$contraseña','$nombreUser','$rol_Usuario')";
    $consulta =  mysqli_query($conn, $sql);

    // //Mostrar el nombre del usuario y nombre
    // $sql = "SELECT * FROM usuarios where username ='$nombreUsuario' ";
    // $consulta =  mysqli_query($conn, $sql);
    // $fila = mysqli_num_rows($consulta);

    // if ($fila) {
    //         while ($registro = mysqli_fetch_assoc($consulta)) {
    //                 $username = $registro["username"];
    //                 $name = $registro["nombre"];
    //                 $idUsuario = $registro["id"];
    //         }
    //}
}


  //Inicia Sesion del usuario registrado
  if (isset($_POST['addlogin'])) {
    $username = $_POST["nombreUsuario"];
    $password = $_POST["pass"];

    $sql="SELECT * FROM usuarios WHERE username='$username' and passwor ='$password'";
    $result = mysqli_query($conn, $sql);

    $registro = mysqli_fetch_array($result);
    $rol = $registro[7];

    if ($registro) { 
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"] = $registro["username"];
      $_SESSION["id_nombre"] = $registro["nombre"];
      $_SESSION["id_cedulaUser"] = $registro["cedulaUser"];

      if($_SESSION['rol'] == 2){
          header('Location: registroViaje.php');
      }
    }else{?>
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
    $rol = $registro[7];

    if ($registro) { 
      $_SESSION['rol'] = $rol;

      $_SESSION["id_username"]=$registro["username"];
      $_SESSION["id_nombre"]=$registro["nombre"];
      $_SESSION["id_cedulaUser"]=$registro["cedulaUser"];

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