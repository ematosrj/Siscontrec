<?php
   session_start();
    if ($_SESSION['captcha'] == $_POST['captcha']){
        echo "<h6>Acessando...</h6>";
        header("Location: tipovisitante.php");
    }
    else{
        echo "<h1>Captcha inválido.</h1>";
        echo "<a href='index.php'>Retornar</a>";
    }
?>