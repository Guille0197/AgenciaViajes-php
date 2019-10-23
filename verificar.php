<?php
session_start();
if (!$_SESSION) { ?>
    <script lenguage=javascript>
    alert("Sesion cerrada correctamente");
        window.location="index.php";
    </script>

    <?php
    }
    $nombreUser = $_SESSION["id_nombre"];
?>