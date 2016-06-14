<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
<body onload = "document.eCorta1.aPaterno.focus() ">
<h1 class="color-azul">¿Que día salio de su casa?</h1>
<form id="eCorta1" method="post">
   <div class="divSalioCasa">
      <div class="divInputs">
        <label for="c_fecha_salio_casaAnoForm">Año</label>
         <select name="c_fecha_salio_casaAnoForm" id="c_fecha_salio_casaAnoForm" class=""> <!-- Los años se cargan con javascript y jquery -->
         <?php
             if($resultadoFechaArray!=3)
             {
                 
             }else{
              ?>
              <option value="<?=$FechaArray[0]?>"><?=$FechaArray[0]?></option>
             <?php
             }
             ?>
        </select>
        <label for="anoSalio">Mes</label>
        <select name="c_fecha_salio_casaMesForm" id="c_fecha_salio_casaMesForm">
           <?php
             if($resultadoFechaArray!=3)
             {
                 
             }else{
                 switch ($FechaArray[1]){
                     case 01:
                         ?>
                         <option value="<?=$FechaArray[1]?>">Enero</option>
                         <?php
                         break;
                         
                     case 02:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Febrero</option>
                         <?php
                         break;
                         
                     case 03:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Marzo</option>
                         <?php
                         break;
                         
                     case 04:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Abril</option>
                         <?php
                         break;
                         
                     case 05:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Mayo</option>
                         <?php
                         break;
                         
                     case 06:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Junio</option>
                         <?php
                         break;
                         
                     case 07:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Julio</option>
                         <?php
                         break;
                         
                     case 08:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Agosto</option>
                         <?php
                         break;
                         
                     case 09:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Septiembre</option>
                         <?php
                         break;
                         
                     case 10:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Octubre</option>
                         <?php
                         break;
                         
                     case 11:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Noviembre</option>
                         <?php
                         break;
                         
                     case 12:
                          ?>
                         <option value="<?=$FechaArray[1]?>">Diciembre</option>
                         <?php
                         break;
                 }
             }
             ?>
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
         <label for="c_fecha_salio_casaDiaForm">Dia</label>
         <select name="c_fecha_salio_casaDiaForm" id="c_fecha_salio_casaDiaForm" class="inputEAT txt-center selectEAT"> <!-- Los años se cargan con javascript y jquery -->
         <?php
             if($resultadoFechaArray!=3)
             {
                 
             }else{
              ?>
              <option value="<?=$FechaArray[2]?>"><?=$FechaArray[2]?></option>
             <?php
             }
             ?>
        </select>
        <div class="divPreguntas">
        <label for="c_por_donde_cruzoForm">¿Por Donde Cruzo?</label>
        <input type="text" id="c_por_donde_cruzoForm" class="txt-center" name="c_por_donde_cruzoForm" required value="<?=$c_por_donde_cruzo?>" autocomplete="off">
        </div>
        
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
           
           
            <input type="hidden" name="c_cuanto_cobranForm" id="c_cuanto_cobranForm" value="<?=$c_cuanto_cobran?>">
            <input type="hidden" name="c_intentosForm" id="c_intentosForm" value="<?=$c_intentos?>">
            <input type="hidden" name="vivia_euaForm" id="vivia_euaForm" value="<?=$vivia_eua?>">
            <input type="hidden" name="v_anos_viviendoForm" id="v_anos_viviendoForm" value="<?=$v_anos_viviendo?>">
            <input type="hidden" name="v_donde_viviaForm" id="v_donde_viviaForm" value="<?=$v_donde_vivia?>">
            <input type="hidden" name="v_donde_lo_detuvieronForm" id="v_donde_lo_detuvieronForm" value="<?=$v_donde_lo_detuvieron?>">
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
            <input type="hidden" name="porque_mas_3_diasForm" id="porque_mas_3_diasForm" value="<?=$porque_mas_3_dias?>">
            <input type="hidden" name="victima_abusoForm" id="victima_abusoForm" value="<?=$victima_abuso?>">
            <input type="hidden" name="conoce_derechosForm" id="conoce_derechosForm" value="<?=$conoce_derechos?>">
            <input type="hidden" name="derechos_violados_porqueForm" id="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>">
            <input type="hidden" name="servicio_moduloForm" id="servicio_moduloForm" value="<?=$servicio_modulo?>">
            <input type="hidden" name="id_migranteForm" id="id_migranteForm" value="<?=$idForm?>">
            <input type="hidden" name="nextPage" id="nextPage" value="7-c.php">
        </div>
    </div>
             <a href="5.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
</form>

 <script>
        $(document).ready(function(){
 
            // cargamos los años
            for(var i=2016;i>1916;i--)
            {
                $("#c_fecha_salio_casaAnoForm").append(new Option(i,i));
            }
            // cargamos los dias
            for(var i=01;i<32;i++)
            {
                $("#c_fecha_salio_casaDiaForm").append(new Option(i,i));
            }
        });
    </script>
<?php
include '../../vistas/footer.php';
?>