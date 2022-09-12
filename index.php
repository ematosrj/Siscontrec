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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<div class="img"><img src="http://sisgeap.sistemas.pm.ba.gov.br/images/PMBA.png" alt="logopm"></div>
<div class="sisconv">Sisconv</div>
<div class="container">
<div class="formcontainer">
		<form class="form">
        <center><a>Fazer Login</a><br><br>
                <h4>Matrícula sem o dígito.</h4>
        </center>
			<div class=input><input type="text" placeholder="Matrícula">
			<input type="password" placeholder="Senha"><br>
<br><center><label><h6>Digite o código</h6></label><br><center><img src="captcha.php?l=150&a=50&tf=20&ql=5">
<br><form action="processa.php" name="form" method="post">
   <input type="text" name="palavra">
   <input type="submit" value="Ok">
</form><button type="submit" value="Entrar">Entrar</button></center>
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