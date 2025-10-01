<?php
    if(isset($_POST["btnIniciarSesion"]))
    {
        header("Location: ../../view/Inicio/Principal.php");
      
    }

    if(isset($_POST["btnCrearCuenta"]))
    {
        header("Location: ../../view/Inicio/IniciarSesion.php");
       
    }
?>
