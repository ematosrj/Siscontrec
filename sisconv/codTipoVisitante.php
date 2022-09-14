<?php

$escolha= isset($_GET["PMCEO"])?$_GET["PMCEO"]:["nao informado"];


if($escolha=="pm"){

    $header2 = header("Location:pm.php");

die();   
}
 
if($escolha=="civil"){
    $header1 = header("Location:civis.php");

die();   
            
}
 
if($escolha=="empresa"){

    $header0 = header("Location:empresas.php");

die();   
}

if($escolha=="outras"){

    $header = header("Location:outras.php");

die();   
}
