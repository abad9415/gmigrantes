<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
<body onload = "document.eCorta1.aPaterno.focus() ">
<form id="eCorta1" method="post">
  <h1 class="color-azul">Tiempo Detenido</h1>
   <div class="divSalioCasa">
      <div class="divInputs">
          
           <label for="tiempo_detenidoDiasForm"><strong>Días</strong></label>
         <select name="tiempo_detenidoDiasForm" id="tiempo_detenidoDiasForm">
            <?php
             if($tiempo_detenidoDias=="")
             {
                 
             }else{
              ?>
              <option value="<?=$tiempo_detenidoDias?>"><?=$tiempo_detenidoDias?></option>
             <?php
             }
             ?>
        </select>
         
        <label for="tiempo_detenidoMesForm"><strong>Meses</strong></label>
        <select name="tiempo_detenidoMesForm" id="tiempo_detenidoMesForm">
           <?php
             if($tiempo_detenidoMes=="")
             {
                 
             }else{
                 ?>
                 <option value="<?=$tiempo_detenidoMes?>"><?=$tiempo_detenidoMes?></option>
                  <?php
             }
             ?>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
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
            
            <input type="hidden" name="c_por_donde_cruzoForm" id="c_por_donde_cruzoForm" value="<?=$c_por_donde_cruzo?>">
            <input type="hidden" name="c_cuanto_cobranForm" id="c_cuanto_cobranForm" value="<?=$c_cuanto_cobran?>">
            <input type="hidden" name="c_intentosForm" id="c_intentosForm" value="<?=$c_intentos?>">
            <input type="hidden" name="vivia_euaForm" id="vivia_euaForm" value="<?=$vivia_eua?>">
            <input type="hidden" name="v_anos_viviendoForm" id="v_anos_viviendoForm" value="<?=$v_anos_viviendo?>">
            <input type="hidden" name="v_donde_viviaForm" id="v_donde_viviaForm" value="<?=$v_donde_vivia?>">
            <input type="hidden" name="v_donde_lo_detuvieronForm" id="v_donde_lo_detuvieronForm" value="<?=$v_donde_lo_detuvieron?>">
            
            <input type="hidden" name="porque_mas_3_diasForm" id="porque_mas_3_diasForm" value="<?=$porque_mas_3_dias?>">
            <input type="hidden" name="victima_abusoForm" id="victima_abusoForm" value="<?=$victima_abuso?>">
            <input type="hidden" name="conoce_derechosForm" id="conoce_derechosForm" value="<?=$conoce_derechos?>">
            <input type="hidden" name="derechos_violados_porqueForm" id="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>">
            <input type="hidden" name="servicio_moduloForm" id="servicio_moduloForm" value="<?=$servicio_modulo?>">
            <input type="hidden" name="id_migranteForm" id="id_migranteForm" value="<?=$idForm?>">
            <input type="hidden" name="nextPage" id="nextPage" value="9.php">
        </div>
    </div>
            <?php
            if($v_donde_lo_detuvieron=="")
            {
                ?>
                <a href="7-c.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
                <?php
            }
            else{
                ?>
                <a href="7-v.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
                <?php
            }
            ?>
             
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
            
             <script>
        $(document).ready(function(){
 
            // cargamos los dias
            for(var i=01;i<32;i++)
            {
                $("#tiempo_detenidoDiasForm").append(new Option(i,i));
            }
      
                 
                 
            function cambiarNextPage8(){
            if($("#tiempo_detenidoDiasForm").val()>3)
                {
                   // alert("nextPage 6-C");
                    $("#nextPage").val("9-m.php");
                }else{
                    if($("#tiempo_detenidoMesForm").val()>=1){
                        $("#nextPage").val("9-m.php");
                    }else{
                        $("#nextPage").val("9.php");
                        $("#porque_mas_3_diasForm").val("");
                    }
                    
                }
            //alert($("#cruzandoForm").val());
        }
        cambiarNextPage8();
        
            $("#tiempo_detenidoDiasForm").change(function () {
                //alert($(this).val());
                cambiarNextPage8();
                //alert($("#nextPage").val());
                });
            $("#tiempo_detenidoMesForm").change(function () {
                //alert($(this).val());
                cambiarNextPage8();
                //alert($("#nextPage").val());
                });

            
          });
    </script>
</form>

<?php
include '../../vistas/footer.php';
?>