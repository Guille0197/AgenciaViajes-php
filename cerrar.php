<?php
    session_start();

    if($_SESSION["id_nombre"]){
        session_destroy();  
        session_unset();
?>
        <script>
            alert("⚠ ADVENTENCIA: Sesión Cerrada Correctamente ⚠");
            window.location="index.php";
        </script>
   
    <?php 
        }
    else{ ?>
    <script>
         alert("⚠ ERROR: No ha iniciado sesión ⚠");
         window.location="login.php";
    </script>
    <?php   
    }
?>