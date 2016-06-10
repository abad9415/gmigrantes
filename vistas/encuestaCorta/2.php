<?php
include '../../vistas/header.php';
?>
<body onload = "document.eCorta1.aPaterno.focus() ">
<form name="eCorta1" action="">
   <div class="divPreguntas">
      <div class="divInputs">
          <label for="aPaterno"><strong>Nombre</strong></label>
          <input type="text" id="aPaterno" class="txt-center" name="aPaterno" required>
          <label for="aPaterno"><strong>Edad</strong></label>
          <input type="text" id="aMaterno" class="txt-center" name="aMaterno" required>
      </div>
            <a href="1.php" class="txt-left"><span class="icon-arrow-left2"></span></a>
            <a href="2.php" class="txt-right"><span class="icon-arrow-right2"></span></a>
    </div>
</form>

<?php
include '../../vistas/footer.php';
?>