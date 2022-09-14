<?php
include('conexao.php');

if(isset($_POST['matricula']) || isset($_POST['senha'])){
    
    if(strlen($_POST['matricula']) == 0){
        echo "";
    } else if(strlen($_POST['senha']) == 0){
        echo "";
    }else{
    
    $matricula = $mysqli ->real_escape_string($_POST['matricula']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    
    $sql_code = "SELECT * FROM  usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:".$mysqli->error);
    
    $quantidade = $sql_query->num_rows;
    
    if($quantidade == 1){
        
        $usuario = $sql_query->fetch_assoc();
        
        if(isset($_SESSION)){
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        
        header("Location: tipovisitante.php");
    }
    
}
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisconv</title>
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/stylesisconv.css"> 
    <link rel="icon" href="icon/favicon.ico">
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>

<body>
<div class="img"><img src="http://sisgeap.sistemas.pm.ba.gov.br/images/PMBA.png" alt="logopm"></div>
<div class="sisconv">Sisconv</div>
<div class="container">
<div class="formcontainer">
		<form method="post" action="index.php" class="form">
        <center><a>Fazer Login</a><br><br>
                <h4>Matrícula sem o dígito.</h4>
        </center> 
                     
			<div class=input><input type="text" placeholder="Matrícula" name="matricula">
			<input type="password" placeholder="Senha" name="senha"><br>
<!-- <br><center><label><h6>Digite o código</h6></label><br><center><img src="captcha.php?l=150&a=50&tf=20&ql=5">
<br><form action="processa.php" name="form" method="post">
   <input type="text" name="palavra">
   <input type="submit" value="Ok">-->
</form><center><button type="submit" value="Entrar">Entrar</button></center>
</div>
              </div>
        
        </div>
        </div>
	
	</form>
	          </div>
        </form>

    
        <footer class="fixar">
<br><br><p>Departamento de Modernização e Tecnologia (DMT)</p><br>
<p>Sisconv - Sistema Controle de Visitantes</p><br>
Versão 1.0 - 050822
        </footer>
    
</body>
</html>