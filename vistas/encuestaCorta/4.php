<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>

    <script type="text/javascript" src="js/actualizarEncuestaCorta.js"></script>
    <script type="text/javascript" src="../js/actualizarEncuestaCorta.js"></script>
    <script type="text/javascript" src="../../js/actualizarEncuestaCorta.js"></script>
    
<body onload = "document.eCorta1.aPaterno.focus() ">
<form id="eCorta1" method="post">
   <div class="divPreguntas">
      <div class="divInputs">
           <label for="hijosForm"><strong>¿Cuantos Hijos tiene?</strong></label>
          <select name="hijosForm" id="hijosForm" class="inputEAT txt-center selectEAT" required>
               <?php
              if($hijos=="")
              {
                  
              }else{?>
                  <option value="<?=$hijos?>"><?=$hijos?></option>
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
          </select>
          <label for="estudiosForm"><strong>¿Cual es su grado de estudios?</strong></label>
          <select name="estudiosForm" id="estudiosForm" class="inputEAT txt-center selectEAT" required>
              <?php
              if($estudios=="")
              {
                  
              }else{?>
                  <option value="<?=$estudios?>"><?=$estudios?></option>
             <?php
                   }
              ?>
              <option value="Ninguno">Ninguno</option>
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Bachillerato">Preparatoria/carrera tecnica</option>
              <option value="Universidad">Universidad</option>
          </select>
      </div>
            <div>
            <input type="hidden" name="ape_paternoForm" id="ape_paternoForm" value="<?=$ape_paterno?>">
            <input type="hidden" name="ape_maternoForm" id="ape_maternoForm" value="<?=$ape_materno?>">
             <input type="hidden" name="nombreForm" id="nombreForm" value="<?=$nombre?>">
             <input type="hidden" name="sexoForm" id="sexoForm" value="<?=$sexo?>">
              <?php
            if($resultadoFechaNacimientoArray=="3")
            {
                ?>
                 <input type="hidden" name="fecha_de_nacimientoAnoForm" id="fecha_de_nacimientoAnoForm" value="<?=$FechaNacimientoArray[0]?>">
                <input type="hidden" name="fecha_de_nacimientoMesForm" id="fecha_de_nacimientoMesForm" value="<?=$FechaNacimientoArray[1]?>">
                <input type="hidden" name="fecha_de_nacimientoDiaForm" id="fecha_de_nacimientoDiaForm" value="<?=$FechaNacimientoArray[2]?>">
                <?php
            }else{
                ?>
                 <input type="hidden" name="fecha_de_nacimientoAnoForm" id="fecha_de_nacimientoAnoForm" value="">
                <input type="hidden" name="fecha_de_nacimientoMesForm" id="fecha_de_nacimientoMesForm" value="">
                <input type="hidden" name="fecha_de_nacimientoDiaForm" id="fecha_de_nacimientoDiaForm" value="">
                <?php
            }
            ?>
            <input type="hidden" name="edadForm" id="edadForm" value="<?=$edad?>">
             <input type="hidden" name="originarioPaisForm" id="originarioPaisForm" value="<?=$originarioPais?>">
          <input type="hidden" name="originarioEstadoForm" id="originarioEstadoForm" value="<?=$originarioEstado?>">
          <input type="hidden" name="originarioMunicipioForm" id="originarioMunicipioForm" value="<?=$originarioMunicipio?>">
            <input type="hidden" name="estado_civilForm" id="estado_civilForm" value="<?=$estado_civil?>">
            
            
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
             <?php
                if($cantidadCuantoCobran=="")
                {
                    ?>
                    <input type="hidden" name="c_cuanto_cobranCantidadForm" id="c_cuanto_cobranCantidadForm" value="">
                    <input type="hidden" name="c_cuanto_cobranMonedaForm" id="c_cuanto_cobranMonedaForm" value="">
                    <?php
                }else{
                    ?>
                     <input type="hidden" name="c_cuanto_cobranCantidadForm" id="c_cuanto_cobranCantidadForm" value="<?=$cantidadCuantoCobran?>">
                    <input type="hidden" name="c_cuanto_cobranMonedaForm" id="c_cuanto_cobranMonedaForm" value="<?=$monedaCuantoCobran?>">
                    <?php
                }
            ?>
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
            <input type="hidden" name="conoce_derechosForm" id="conoce_derechosForm" value="<?=$conoce_derechos?>">
            <input type="hidden" name="derechos_violados_porqueForm" id="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>">
            <input type="hidden" name="como_de_saludForm" id="como_de_saludForm" value="<?=$como_de_salud?>">
            <input type="hidden" name="servicio_moduloForm" id="servicio_moduloForm" value="<?=$servicio_modulo?>">
            <input type="hidden" name="id_migranteForm" id="id_migranteForm" value="<?=$idForm?>">
            <input type="hidden" name="nextPage" id="nextPage" value="5.php">
        </div>
    </div>
             <a href="3.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
</form>

<?php
include '../../vistas/footer.php';
?>