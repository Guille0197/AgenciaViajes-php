<?php
session_start();
include_once 'codigo.php';

if (!$_SESSION) { ?>
    <script lenguage=javascript>
    alert("Sesion cerrada correctamente");
        window.location="index.php";
    </script>

    <?php
    }
    $nombreUser = $_SESSION["id_nombre"];
    
    $usernam = $_SESSION["id_username"];
    $IDUser = $_SESSION["id_cedulaUser"];

    //$costoViajar = $_SESSION["id_costoViaje"];
?>