<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisconv</title>
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/stylesisconv.css"> 
   
</head>

<body>

<div class="img"><img src="http://sisgeap.sistemas.pm.ba.gov.br/images/PMBA.png" alt="logopm"></div>
<div class="sisconv">Sisconv</div>
<div class="wrapper">
	<div class="container">
            
	<form action="codTipoVisitante.php" method="GET"/>
    <div class="formlist"><h1><a>Cadastro Visita</a></h1><form action="/action_page.php">
  <label for="origemdovisitante">Origem visitante:</label>
  
  <select name="PMCEO" id="visitantes">
      <option name="PMCEO" value="pm">Policial Militar</option>
      <option name="PMCEO" value="civil">Civil</option>
      <option name="PMCEO" value="empresa">Empresa</option>
      <option name="PMCEO" value="outras">Outras Instituições</option>
  </select><br><br><br>
  <input type="submit" value="Cadastrar Visitante"></form></div>
 
  </div>

    
    <footer>
<p>Departamento de Modernização e Tecnologia (DMT)</p><br>
<p>Sisconv - Sistema Controle de Visitantes</p><br>
Versão 1.0 - 050822

    </footer>
    
</body>
</html>