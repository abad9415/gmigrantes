<?php
	#####################################################
	#AUTOR: Eduardo Abad Tinoco                 (MHMB)	#
	#FECHA: 10 de Junio del 2016						#
	#DESCRIPCIÓN: INGRESO DE DATOS          			#
	#                           						#
	#####################################################
	#HISTORIAL DE MODIFICACIONES						#
	#####################################################
	include '../../vistas/header.php';
	include '../actions/actionRequerido.php';
?>
<script type="text/javascript">

$(document).ready(function(){
	$("#eCorta1").submit(function(e){
		$.ajax({
			 type: "POST", 	
			  url: "../actions/actualizarDatos.php",
			  data:"ape_paternoForm="+$("#ape_paternoForm").val()+ 
			  "&ape_maternoForm="+$("#ape_maternoForm").val()+
			  '&nombreForm='+$("#nombreForm").val() + 
			  '&edadForm='+$("#edadForm").val() +
			  '&originarioForm='+$("#originarioForm").val() +
			  '&estado_civilForm='+$("#estado_civilForm").val() +
			  '&hijosForm='+$("#hijosForm").val() +
              '&estudiosForm='+$("#estudiosForm").val() +
              '&cruzandoForm='+$("#cruzandoForm").val() +
              '&c_fecha_salio_casaForm='+$("#c_fecha_salio_casaForm").val() +
              '&c_por_donde_cruzoForm='+$("#c_por_donde_cruzoForm").val() +
              '&c_cuanto_cobranForm='+$("#c_cuanto_cobranForm").val() +
              '&c_intentosForm='+$("#c_intentosForm").val() +
              '&vivia_euaForm='+$("#vivia_euaForm").val() +
              '&v_anos_viviendoForm='+$("#v_anos_viviendoForm").val() +
              '&v_donde_viviaForm='+$("#v_donde_viviaForm").val() +
              '&v_donde_lo_detuvieronForm='+$("#v_donde_lo_detuvieronForm").val() +
              '&tiempo_detenidoForm='+$("#tiempo_detenidoForm").val() +
              '&porque_mas_3_diasForm='+$("#porque_mas_3_diasForm").val() +
              '&victima_abusoForm='+$("#victima_abusoForm").val() +
              '&conoce_derechosForm='+$("#conoce_derechosForm").val() +
              '&derechos_violados_porqueForm='+$("#derechos_violados_porqueForm").val() +
              '&servicio_moduloForm='+$("#servicio_moduloForm").val()+
              '&id_migranteForm='+$("#id_migranteForm").val()
			}).done(function(result) {
				//alert (result);
				window.location.href = "2.php";		
		});
	    return false;
	});
});
</script>


<body onload = "document.eCorta1.aPaterno.focus() ">
<form id="eCorta1" method="post">
   <div class="divPreguntas">
      <div class="divInputs">
          <label for="aPaterno"><strong>Apellido Paterno</strong></label>
          <input type="text" id="ape_paternoForm" class="txt-center" name="ape_paternoForm" required value="<?=$ape_paterno?>">
          <label for="aPaterno"><strong>Apellido Materno</strong></label>
          <input type="text" id="ape_maternoForm" class="txt-center" name="ape_maternoForm" required value="<?=$ape_materno?>">
      </div>
        <div>
            <input type="hidden" name="nombreForm" id="nombreForm" value="<?=$nombre?>">
            <input type="hidden" name="edadForm" id="edadForm" value="<?=$edad?>">
            <input type="hidden" name="originarioForm" id="originarioForm" value="<?=$originario?>">
            <input type="hidden" name="estado_civilForm" id="estado_civilForm" value="<?=$estado_civil?>">
            <input type="hidden" name="hijosForm" id="hijosForm" value="<?=$hijos?>">
            <input type="hidden" name="estudiosForm" id="estudiosForm" value="<?=$estudios?>">
            <input type="hidden" name="cruzandoForm" id="cruzandoForm" value="<?=$cruzando?>">
            <input type="hidden" name="c_fecha_salio_casaForm" id="c_fecha_salio_casaForm" value="<?=$c_fecha_salio_casa?>">
            <input type="hidden" name="c_por_donde_cruzoForm" id="c_por_donde_cruzoForm" value="<?=$c_por_donde_cruzo?>">
            <input type="hidden" name="c_cuanto_cobranForm" id="c_cuanto_cobranForm" value="<?=$c_cuanto_cobran?>">
            <input type="hidden" name="c_intentosForm" id="c_intentosForm" value="<?=$c_intentos?>">
            <input type="hidden" name="vivia_euaForm" id="vivia_euaForm" value="<?=$vivia_eua?>">
            <input type="hidden" name="v_anos_viviendoForm" id="v_anos_viviendoForm" value="<?=$v_anos_viviendo?>">
            <input type="hidden" name="v_donde_viviaForm" id="v_donde_viviaForm" value="<?=$v_donde_vivia?>">
            <input type="hidden" name="v_donde_lo_detuvieronForm" id="v_donde_lo_detuvieronForm" value="<?=$v_donde_lo_detuvieron?>">
            <input type="hidden" name="tiempo_detenidoForm" id="tiempo_detenidoForm" value="<?=$tiempo_detenido?>">
            <input type="hidden" name="porque_mas_3_diasForm" id="porque_mas_3_diasForm" value="<?=$porque_mas_3_dias?>">
            <input type="hidden" name="victima_abusoForm" id="victima_abusoForm" value="<?=$victima_abuso?>">
            <input type="hidden" name="conoce_derechosForm" id="conoce_derechosForm" value="<?=$conoce_derechos?>">
            <input type="hidden" name="derechos_violados_porqueForm" id="derechos_violados_porqueForm" value="<?=$derechos_violados_porque?>">
            <input type="hidden" name="servicio_moduloForm" id="servicio_moduloForm" value="<?=$servicio_modulo?>">
            <input type="hidden" name="id_migranteForm" id="id_migranteForm" value="<?=$idForm?>">
        </div>
    </div>
    <button name="nextForm" id="nextForm" type="submit" class="botonNext flechasEAT txt-right">
    <span class="icon-arrow-right2"></span>
    </button>
</form>
<?php
include '../../vistas/footer.php';
?>