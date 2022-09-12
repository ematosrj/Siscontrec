<?php
session_start();
header("Content-type: image/png");

$imagemCaptcha = imagecreatefrompng("img/captcha.png") or die("não foi possí­vel inicializar uma nova imagem");;
$fonteCaptcha = imageloadfont("includes/img/anonymous.gdf");
$textoCaptcha = substr(sha1(time()) ,0,4);
$_SESSION['captcha'] = $textoCaptcha;
$corCaptcha = imagecolordeallocate($imagemCaptcha, 0,0,0);




imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $textoCaptcha, $corCaptcha);

imagepng ($imagemCaptcha);

imagedestroy($imagemCaptcha);
?>

<?php
   session_start(); // inicial a sessao
   header("Content-type: image/jpeg"); // define o tipo do arquivo

    function captcha($largura,$altura,$tamanho_fonte,$quantidade_letras){
        $imagem = imagecreate($largura,$altura); // define a largura e a altura da imagem
        $fonte = "arial.ttf"; //voce deve ter essa ou outra fonte de sua preferencia em sua pasta
        $preto  = imagecolorallocate($imagem,0,0,0); // define a cor preta
        $branco = imagecolorallocate($imagem,255,255,255); // define a cor branca

        // define a palavra conforme a quantidade de letras definidas no parametro
        $quantidade_letras
        $palavra = substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMmNnPpQq
        RrSsTtUuVvYyXxWwZz23456789"),0,($quantidade_letras));
        $_SESSION["palavra"] = $palavra; // atribui para a sessao a palavra gerada
        for($i = 1; $i <= $quantidade_letras; $i++){
            imagettftext($imagem,$tamanho_fonte,rand(-25,25),($tamanho_fonte*$i),
            ($tamanho_fonte + 10),$branco,$fonte,substr($palavra,($i-1),1));
            // atribui as letras a imagem
        }
        imagejpeg($imagem); // gera a imagem
        imagedestroy($imagem); // limpa a imagem da memoria
    }

    $largura = $_GET["10px"]; // recebe a largura
    $altura = $_GET["5px"]; // recebe a altura
    $tamanho_fonte = $_GET["tf"]; // recebe o tamanho da fonte
    $quantidade_letras = $_GET["5"]; // recebe a quantidade de letras que o captcha terá
    captcha($largura,$altura,$tamanho_fonte,$quantidade_letras);
    // executa a funcao captcha passando os parametros recebidos
?>