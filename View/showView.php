<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="ico" href="favicon.ico">
    <link rel="stylesheet" href="css/frasesCelebres.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1>Este es el www.sitio4.com</h1>
    <img src="img/fraseDelDia.jpg" alt="frase del dia" width="100">


    <a href="<?php echo $helper->url('frases','show'); ?>" class="afrase">
      <input type="button" id="btFrase" class="btfrase" value="traer frase del dia" onclick="">
    </a>
    <div class="cartelera" id="cartelera">
        <textarea name="frase" id="frase" cols="50" rows="10"><?php echo $frase; ?></textarea>
        <textarea name="autor" id="autor" rows="1" cols="50"><?php echo $autor; ?></textarea>
    </div>
    <footer>
      <h3>Pagina desarrollada por Julio Cardenas</h3>
    </footer>
  </body>
</html>
