<?php include("conexion.php");
if(!isset($_SESSION)) {
	session_start();
}
  @$username = $_POST["username"];
  @$password = $_POST["password"];
 $sql="SELECT * from user where username='$username' and passwor ='$password'";

  $result=mysqli_query($conn, $sql);
  $registro = mysqli_fetch_array($result);
  if(!$registro[0]) { ?>

  	<script lenguage=javascript>
      alert("Usuario incorrecto");
      window.location="login.php";
      </script>

 <?php }
  else {
  	$_SESSION["id_user"]=$registro["username"];
  	$_SESSION["id_nombre"]=$registro["Name"];
  	header("Location:registro.php");
  }
?>