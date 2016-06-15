<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
<body onload = "document.eCorta1.aPaterno.focus() ">
<h2 class="color-azul"><strong>Sus Derechos...</strong></h2>
<form id="eCorta1" method="post">
   <div class="divPreguntas">
      <div class="divInputs">
         <div class="div-oculto0">
              <label for="conoce_derechosForm"><strong>¿Conoce sus derechos?</strong></label>
          <select name="conoce_derechosForm" id="conoce_derechosForm" class="divSalioCasa">
             <?php
              if($conoce_derechos=="")
              {
              }else{
                  ?>
                  <option value="<?=$conoce_derechos?>"><?=$conoce_derechos?></option>
                  <?php
              }
              
              ?>
              <option value="No">No</option>
              <option value="Si">Si</option>
          </select>
         </div>
         <div class="div-oculto">
              <label for="derechosVioladosForm"><strong>¿Siente que han sido violados?</strong></label>
           <select name="derechosVioladosForm" id="derechosVioladosForm" class="divSalioCasa">
             <?php
              if($conoce_derechos=="")
              {
              }else{
                  ?>
                  <option value="<?=$conoce_derechos?>"><?=$conoce_derechos?></option>
                  <?php
              }
              
              ?>
              <option value="No">No</option>
              <option value="Si">Si</option>
          </select>
          </div>
          
          <div class="div-oculto2" id="div-oculto">
              <label for="derechos_violados_porqueForm">¿Porqué?</label>
              <input type="text" id="derechos_violados_porqueForm" name="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>" autocomplete="off">
          </div>
          
          
           <input type="hidden" name="conoce_derechosForm" id="conoce_derechosForm" value="<?=$conoce_derechos?>">
            <input type="hidden" name="derechos_violados_porqueForm" id="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>">
      </div>
            <div>
            <input type="hidden" name="ape_paternoForm" id="ape_paternoForm" value="<?=$ape_paterno?>">
            <input type="hidden" name="ape_maternoForm" id="ape_maternoForm" value="<?=$ape_materno?>">
            <input type="hidden" name="nombreForm" id="nombreForm" value="<?=$nombre?>">
            <input type="hidden" name="edadForm" id="edadForm" value="<?=$edad?>">
            <input type="hidden" name="originarioForm" id="originarioForm" value="<?=$originario?>">
            <input type="hidden" name="estado_civilForm" id="estado_civilForm" value="<?=$estado_civil?>">
            <input type="hidden" name="hijosForm" id="hijosForm" value="<?=$hijos?>">
            <input type="hidden" name="estudiosForm" id="estudiosForm" value="<?=$estudios?>">
            <input type="hidden" name="cruzandoForm" id="cruzandoForm" value="<?=$cruzando?>">
            
            <?php
            if($resultadoFechaArray=="3")
            {
                ?>
                 <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaAnoForm" value="<?=$FechaArray[0]?>">
                <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaMesForm" value="<?=$FechaArray[1]?>">
                <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaDiaForm" value="<?=$FechaArray[2]?>">
                <?php
            }else{
                ?>
                 <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaAnoForm" value="">
                <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaMesForm" value="">
                <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaDiaForm" value="">
                <?php
            }
            ?>
            
            
            <?php
            if($resultadotiempoDetenido==2)
            {
                ?>
                 <input type="hidden" name="tiempo_detenidoDiasForm" id="tiempo_detenidoDiasForm" value="<?=$tiempo_detenidoDias?>">
                  <input type="hidden" name="tiempo_detenidoMesForm" id="tiempo_detenidoMesForm" value="<?=$tiempo_detenidoMes?>">
               <?php
            }else{
                ?>
                  <input type="hidden" name="tiempo_detenidoDiasForm" id="tiempo_detenidoDiasForm" value="">
                  <input type="hidden" name="tiempo_detenidoMesForm" id="tiempo_detenidoMesForm" value="">
                <?php
            }
            ?>
            
             <input type="hidden" name="tiempo_detenidoForm" id="tiempo_detenidoForm" value="<?=$tiempo_detenido?>">
            
            <input type="hidden" name="c_por_donde_cruzoForm" id="c_por_donde_cruzoForm" value="<?=$c_por_donde_cruzo?>">
            <input type="hidden" name="c_cuanto_cobranForm" id="c_cuanto_cobranForm" value="<?=$c_cuanto_cobran?>">
            <input type="hidden" name="c_intentosForm" id="c_intentosForm" value="<?=$c_intentos?>">
            <input type="hidden" name="vivia_euaForm" id="vivia_euaForm" value="<?=$vivia_eua?>">
            <input type="hidden" name="v_anos_viviendoForm" id="v_anos_viviendoForm" value="<?=$v_anos_viviendo?>">
            <input type="hidden" name="v_donde_viviaForm" id="v_donde_viviaForm" value="<?=$v_donde_vivia?>">
            <input type="hidden" name="v_donde_lo_detuvieronForm" id="v_donde_lo_detuvieronForm" value="<?=$v_donde_lo_detuvieron?>">
           
           
            <input type="hidden" name="porque_mas_3_diasForm" id="porque_mas_3_diasForm" value="<?=$porque_mas_3_dias?>">
               <?php
                if($resultadoAbusoOtroArray=="2")
                {
                    ?>
                    <input type="hidden" name="victima_abusoForm" id="victima_abusoForm" value="<?=$tipoAbuso?>">
                    <input type="hidden" name="victima_abusoOtroForm" id="victima_abusoOtroForm" value="<?=$tipoAbusoOtro?>">
                    <?php
                }else{
                    ?>
                    <input type="hidden" name="victima_abusoForm" id="victima_abusoForm" value="<?=$tipoAbuso?>">
                    <input type="hidden" name="victima_abusoOtroForm" id="victima_abusoOtroForm" value="">
                    <?php
                }
            ?>
           
           
            <input type="hidden" name="servicio_moduloForm" id="servicio_moduloForm" value="<?=$servicio_modulo?>">
            <input type="hidden" name="id_migranteForm" id="id_migranteForm" value="<?=$idForm?>">
            <input type="hidden" name="nextPage" id="nextPage" value="11.php">
        </div>
    </div>
            <a href="9.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
            
</form>

<script>
$(document).ready(function(){
    var valorPhpPorquederechosViolados = $("#derechos_violados_porqueForm").val();
    $(".div-oculto").hide();
    $(".div-oculto2").hide();
    //alert(valorPhpPorquederechosViolados);
            function conoceSusDerechos(){
                if($("#conoce_derechosForm").val()=="Si")
                    {
                        $(".div-oculto").show(1000);
                    }else{
                        $(".div-oculto").hide(1000);
                    }
                }
            function derechosViolados(){
                if($("#derechosVioladosForm").val()=="Si")
                    {
                        $(".div-oculto2").show(1000);
                        $("#derechos_violados_porqueForm").prop('required',true);
                        $(".div-oculto0").hide(1000);
                        $("#derechos_violados_porqueForm").val(valorPhpPorquederechosViolados);
                    }else{
                        $(".div-oculto2").hide(1000);
                        $("#derechos_violados_porqueForm").prop('required',false);
                        $(".div-oculto0").show(1000);
                        $("#derechos_violados_porqueForm").val("No");
                    }
            }
            conoceSusDerechos();
            derechosViolados();
            $("#conoce_derechosForm").change(function () {
			//alert($(this).val());
            conoceSusDerechos();
			});
    
            $("#derechosVioladosForm").change(function () {
			//alert($(this).val());
            derechosViolados();
			});
        });
</script>


<?php
include '../../vistas/footer.php';
?>