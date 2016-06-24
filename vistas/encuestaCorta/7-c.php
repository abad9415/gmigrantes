<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
    <script type="text/javascript" src="js/actualizarPara7-php-cuantoCobran.js"></script>
    <script type="text/javascript" src="../js/actualizarPara7-php-cuantoCobran.js"></script>
    <script type="text/javascript" src="../../js/actualizarPara7-php-cuantoCobran.js"></script>
<body onload = "document.eCorta1.aPaterno.focus() ">
<form id="eCorta1" method="post">
   <div class="divSalioCasa">
      <div class="divInputs">
          <label for="c_cuanto_cobranCantidadForm"><strong>¿Cuanto le cobraron por cruzar?</strong></label>
          <input type="number" id="c_cuanto_cobranCantidadForm" class="txt-center" name="c_cuanto_cobranCantidadForm" value="<?=$cantidadCuantoCobran?>" required autofocus>
          
          <?php
            if($monedaCuantoCobran=="")
            {
                ?>
                 <div class="checkboxDiv">
                    <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranUSD" value="USD" checked> <label for="cobranUSD" id="labelUSD" class="activeHombre">USD</label>
                    <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranMXN" value="MXN">
                    <label for="cobranMXN" id="labelMXN">MXN</label>
                </div>
                <?php
                
            }else{
                if($monedaCuantoCobran=="USD")
                {
                   ?>
                   <div class="checkboxDiv">
                    <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranUSD" value="USD" checked> <label for="cobranUSD" id="labelUSD" class="activeHombre">USD</label>
                    <!-- añadir clase a label activado para USD -->
                    <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranMXN" value="MXN">
                    <label for="cobranMXN" id="labelMXN">MXN</label>
                    </div>
                   <?php 
                }else{
                        ?>
                            <div class="checkboxDiv">
                            <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranUSD" value="USD"> <label for="cobranUSD" id="labelUSD">USD</label>
                            <input type="radio" name="c_cuanto_cobranMonedaForm" class="c_cuanto_cobranMonedaForm" id="cobranMXN" value="MXN" checked>
                            <label for="cobranMXN" id="labelMXN" class="activeHombre">MXN</label>
                            <!-- añadir clase a label activado para USD -->
                            </div>
                        <?php
                  }
              
            }
        ?>

         <br>
          <label for="c_intentosForm"><strong>¿Cuantas veces ah intentado cruzar?</strong></label>
          <input type="number" id="c_intentosForm" class="txt-center" name="c_intentosForm" value="<?=$c_intentos?>" required min="1" max="30">
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
            
            
            
            <input type="hidden" name="vivia_euaForm" id="vivia_euaForm" value="<?=$vivia_eua?>">
            <input type="hidden" name="v_anos_viviendoForm" id="v_anos_viviendoForm" value="">
            <input type="hidden" name="v_donde_viviaForm" id="v_donde_viviaForm" value="">
            <input type="hidden" name="v_donde_lo_detuvieronForm" id="v_donde_lo_detuvieronForm" value="">
            
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
            <input type="hidden" name="nextPage" id="nextPage" value="8.php">
        </div>
    </div>
             <a href="6-c.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
</form>
    <script>
        $("#hola").hide();
        $(document).ready(function(){
 
            /*$( ".c_cuanto_cobranMonedaForm" ).on( "click", function() {
              alert($( ".c_cuanto_cobranMonedaForm:checked" ).val());
            });*/
            
            $( "#labelMXN" ).on( "click", function() {
              $(this).addClass("activeHombre");
              $("#labelUSD").removeClass("activeHombre");
            });
            
            $( "#labelUSD" ).on( "click", function() {
              $(this).addClass("activeHombre");
              $("#labelMXN").removeClass("activeHombre");
            });
        });
       /* var clicks = null;
        $( "html" ).click(function() {
         // $( this ).slideUp();
            clicks = clicks + 1;
            if(clicks==10)
                {
                    $("#hola").show();
                }
            //alert(clicks);
        });
        */
    </script>
<?php
include '../../vistas/footer.php';
?>