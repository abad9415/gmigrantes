<?php
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
    <script type="text/javascript" src="js/actualizarParaSexo2php.js"></script>
    <script type="text/javascript" src="../js/actualizarParaSexo2php.js"></script>
    <script type="text/javascript" src="../../js/actualizarParaSexo2php.js"></script>
<body onload = "document.eCorta1.aPaterno.focus() ">
<form id="eCorta1" method="post">
   <div class="divSalioCasa">
      <div class="divInputs">
          <label for="nombreForm"><strong>Nombre</strong></label>
          <input type="text" id="nombreForm" class="txt-center" name="nombreForm" value="<?=$nombre?>" required autocomplete="off" autofocus>
          
        <?php
            if($sexo=="")
            {
                ?>
                 <div class="checkboxDiv">
                    <input type="radio" name="sexoForm" class="sexoForm" id="sexoHombre" value="Hombre" checked> <label for="sexoHombre" id="labelHombre" class="activeHombre">Hombre</label>
                    <input type="radio" name="sexoForm" class="sexoForm" id="sexoMujer" value="Mujer">
                    <label for="sexoMujer" id="labelMujer">Mujer</label>
                </div>
                <?php
                
            }else{
                if($sexo=="Hombre")
                {
                   ?>
                   <div class="checkboxDiv">
                        <input type="radio" name="sexoForm" class="sexoForm" id="sexoHombre" value="Hombre" checked> <label for="sexoHombre" id="labelHombre" class="activeHombre">Hombre</label>
                        <input type="radio" name="sexoForm" class="sexoForm" id="sexoMujer" value="Mujer">
                        <label for="sexoMujer" id="labelMujer">Mujer</label>
                    </div>
                   <?php 
                }else{
                      ?>
                   
                    <div class="checkboxDiv">
                        <input type="radio" name="sexoForm" class="sexoForm" id="sexoHombre" value="Hombre"> <label for="sexoHombre" id="labelHombre">Hombre</label>
                        <input type="radio" name="sexoForm" class="sexoForm" id="sexoMujer" value="Mujer" checked>
                        <label for="sexoMujer" id="labelMujer" class="activeMujer">Mujer</label>
                    </div>
                <?php
                }
              
            }
        ?>
        
         <p class="pegadoClass"><strong>Fecha de Nacimiento</strong></p> 
         <label for="fecha_de_nacimientoAnoForm">Año</label>
         <select name="fecha_de_nacimientoAnoForm" id="fecha_de_nacimientoAnoForm"> <!-- Los años se cargan con javascript y jquery -->
         <?php
             if($resultadoFechaNacimientoArray!=3)
             {
                 
             }else{
              ?>
              <option value="<?=$FechaNacimientoArray[0]?>"><?=$FechaNacimientoArray[0]?></option>
             <?php
             }
             ?>
        </select>
        <label for="fecha_de_nacimientoMesForm">Mes</label>
        <select name="fecha_de_nacimientoMesForm" id="fecha_de_nacimientoMesForm">
           <?php
             if($resultadoFechaNacimientoArray!=3)
             {
                 
             }else{
                 switch ($FechaNacimientoArray[1]){
                     case 01:
                         ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Enero</option>
                         <?php
                         break;
                         
                     case 02:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Febrero</option>
                         <?php
                         break;
                         
                     case 03:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Marzo</option>
                         <?php
                         break;
                         
                     case 04:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Abril</option>
                         <?php
                         break;
                         
                     case 05:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Mayo</option>
                         <?php
                         break;
                         
                     case 06:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Junio</option>
                         <?php
                         break;
                         
                     case 07:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Julio</option>
                         <?php
                         break;
                         
                     case 08:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Agosto</option>
                         <?php
                         break;
                         
                     case 09:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Septiembre</option>
                         <?php
                         break;
                         
                     case 10:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Octubre</option>
                         <?php
                         break;
                         
                     case 11:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Noviembre</option>
                         <?php
                         break;
                         
                     case 12:
                          ?>
                         <option value="<?=$FechaNacimientoArray[1]?>">Diciembre</option>
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
         <label for="fecha_de_nacimientoDiaForm">Dia</label>
         <select name="fecha_de_nacimientoDiaForm" id="fecha_de_nacimientoDiaForm" class="inputEAT txt-center selectEAT"> <!-- Los años se cargan con javascript y jquery -->
         <?php
             if($resultadoFechaNacimientoArray!=3)
             {
                 
             }else{
              ?>
              <option value="<?=$FechaNacimientoArray[2]?>"><?=$FechaNacimientoArray[2]?></option>
             <?php
             }
             ?>
        </select> 
      </div>
            <div>
            <input type="hidden" name="ape_paternoForm" id="ape_paternoForm" value="<?=$ape_paterno?>">
            <input type="hidden" name="ape_maternoForm" id="ape_maternoForm" value="<?=$ape_materno?>">
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
            <input type="hidden" name="nextPage" id="nextPage" value="3.php">
        </div>
    </div>
             <a href="1.php" class="txt-left flechasEAT"><span class="icon-arrow-left2"></span></a>
            <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
            <span class="icon-arrow-right2"></span>
            </button>
</form>


 <script>
        $(document).ready(function(){
 
            // cargamos los años
            for(var i=2016;i>1916;i--)
            {
                $("#fecha_de_nacimientoAnoForm").append(new Option(i,i));
            }
            // cargamos los dias
            for(var i=01;i<32;i++)
            {
                $("#fecha_de_nacimientoDiaForm").append(new Option(i,i));
            }
            
            /*$( ".sexoForm" ).on( "click", function() {
              alert($( ".sexoForm:checked" ).val());
            });*/
            
            $( "#labelMujer" ).on( "click", function() {
              $(this).addClass("activeMujer");
              $("#labelHombre").removeClass("activeHombre");
            });
            
            $( "#labelHombre" ).on( "click", function() {
              $(this).addClass("activeHombre");
              $("#labelMujer").removeClass("activeMujer");
            });
        });
    </script>
<?php
include '../../vistas/footer.php';
?>