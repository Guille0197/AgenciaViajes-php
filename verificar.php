<?php
session_start();

if (!$_SESSION) { ?>
    <script lenguage=javascript>
        window.location="registroUser.php";
    </script>

    <?php
    }
    $nombreUser = $_SESSION["id_nombre"];
    $usernam = $_SESSION["id_username"];
    $IDUser = $_SESSION["id_cedulaUser"];
    $cod_v = $_SESSION["id_codViaje"];

    $direcc = $_SESSION["id_direccion"];
    $telf = $_SESSION["id_telefono"];
    $pass = $_SESSION["id_pass"];
    $idUsuario = $_SESSION["id"];
    
?>