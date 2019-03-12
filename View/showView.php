<?php
    include '../View/showHeader.php';
?>
    <div class="main">
      <main>
        <img src="img/fraseDelDia.jpg" alt="frase del dia" width="100">
        <a href="<?php echo $helper->url('frases','show'); ?>" class="afrase">
          <input type="button" id="btFrase" class="btfrase" value="traer frase del dia" onclick="">
        </a>
        <div class="cartelera" id="cartelera">
          <textarea name="frase" id="frase" cols="50" rows="10"><?php echo $frase; ?></textarea>
          <textarea name="autor" id="autor" rows="1" cols="50"><?php echo $autor; ?></textarea>
        </div>
      </main>
    </div>
<?php
  include '../View/showAside.php';
?>
<?php
  include '../View/showFooter.php';
?>
