<?php
    session_start();

    if($_SESSION["id_user"]){
        session_destroy();  ?>
        <script>
        alert("Sesion cerrada correctamente");
        window.location="index.php";
        </script>
   
    <?php 
        }
    else{ ?>
    <script>
         alert("No ha iniciado sesion");
         window.location="index.php";
    </script>
    <?php   
    }
?>