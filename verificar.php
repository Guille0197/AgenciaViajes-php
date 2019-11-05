<?php
session_start();

if (!$_SESSION) { ?>
    <script lenguage=javascript>
        window.location="login.php";
    </script>

    <?php
    }
    $nombreUser = $_SESSION["id_nombre"];
    $usernam = $_SESSION["id_username"];
    $IDUser = $_SESSION["id_cedulaUser"];
    $cod_v = $_SESSION["id_codViaje"];
    
?>