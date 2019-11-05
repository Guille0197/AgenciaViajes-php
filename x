  //session_start();

  //Cerrar sesion
  // if(isset($_SESSION["id_user"])){
  //   session_unset();
  //   session_destroy();
  // }

  // if(isset($_SESSION['rol'])){

  //   switch($_SESSION['rol']){
  //     case 1:
  //       header('Location: index.php');
  //     break;

  //     case 2:
  //       header('Location: index.php');
  //     break;

  //     default;
  //   }
  // }

  //Inicio de sesion
  // if(isset($_POST['username']) && isset($_POST['password'])){
  //   $username = $_POST["username"];
  //   $password = $_POST["password"];

  //   $db = new Database();
  //   $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND passwor = :password');
  //   $query->execute(['username' => $username, 'password' => $password]);

  //   $row = $query->fetch(PDO::FETCH_NUM);
  //   if ($row == true) {
  //     #  validar rol
  //     $rol = $row[7];
  //     $_SESSION['rol'] = $rol;

  //     $nombreUser = $rol['nombre'];
  //     $cedUser = $rol['cedulaUser'];

      
  //     //$nombreUser = $_SESSION["id_nombre"];

  //     switch($_SESSION['rol']){
  //       case 1:
  //         header('Location: dashboards/index.php');
  //       break;

  //       case 2:
  //         header('Location: registroViaje.php');
  //       break;

  //       default;
  //     }
      
  //   }else {
  //     # no existe
  //     $ErrorMensaje =  "EL usuario o contraseña son incorrectos";
  //   }

  // }