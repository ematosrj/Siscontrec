<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisconv</title>
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/civis.css">    

</head>

<body>
<div class="img"><img src="http://sisgeap.sistemas.pm.ba.gov.br/images/PMBA.png" alt="logopm"></div>
<ul>
  <li><a href="#">Meu Perfil</a></li>
  <li><a href="#">Consulta</a></li>
  <li><a href="#">Tirar Foto</li>
  <li><a href="#">Sair</a></li>
</ul>

<div class="container2">
      <form class="form1">
    <input type="text" name="name" id="name" placeholder="Nome Completo" autocomplete="off">
    <input type="text" name="cpf" id="cpf" placeholder="Cpf do Visitante" autocomplete="off">
    <input type="telefone" name="telefone" id="telefone" placeholder="Número do visitante" autocomplete="off">   
    <input type="text" name="secao" id="secao" placeholder="Seção Destino" autocomplete="off"> 
    <input type="text" name="placa" id="placa" placeholder="Placa Veículo" autocomplete="off"> 
    <input type="text" name="nomevisitado" id="nomevisitado" placeholder="Nome do visitado" autocomplete="off"> 
    <br>
    <label for="horachegada">Horário Chegada:</label>
    <?php echo date('d/m/Y H:i:s A', time()); ?>
    <button type="submit">Enviar chegada</button><br>
            
    <br><label for="horasaida">Horário Saída:</label>
    <?php echo date('d/m/Y H:i:s A', time()); ?><button type="submit">Enviar Saída</button>
    </form><div class="container3">
<video id='video' height="352" widht="240"></video>
<canvas id="canvas" height="352" width="240"></canvas>
<button id="capture">Capturar</button></div></div>
<script>

navigator.mediaDevices.getUserMedia({video: true}).then(function (mediaStream) {
    const video = document.querySelector('#video');
    video.srcObject = mediaStream;
    video.play();
});

document.querySelector('#capture').addEventListener('click', function (e) {
    var canvas = document.querySelector("#canvas");  
    canvas.height = video.videoHeight;
    canvas.width = video.videoWidth;
    var context = canvas.getContext('2d');
    context.drawImage(video, 0, 0)
})  
document.querySelector('#upload').addEventListener('click', function (e) {
    
        var canvas = document.querySelector("#canvas");
    
        canvas.toBlob(function (blob) {
    
            var form = new FormData();
            form.append('image', blob, 'webcam.jpg');
    
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/upload', true);
            xhr.onload = function(e) {
                // upload concluído  
            };
    
            xhr.send(form);  
    
        }, 'image/jpeg');
    })</script></div></div>
    



    
    
    <footer class="fixar">
<p>Departamento de Modernização e Tecnologia (DMT)</p><br>
<p>Sisconv - Controle de Visitantes</p><br>
Versão 1.0 - 050822

    </footer>
    
</body>
</html>