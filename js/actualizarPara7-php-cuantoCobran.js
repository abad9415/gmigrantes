$(document).ready(function(){
	$("#eCorta1").submit(function(e){
		$.ajax({
			 type: "POST", 	
			  url: "../actions/actualizarDatos.php",
			  data:"ape_paternoForm="+$("#ape_paternoForm").val()+ 
			  "&ape_maternoForm="+$("#ape_maternoForm").val()+
			  '&nombreForm='+$("#nombreForm").val() + 
              '&fecha_de_nacimientoDiaForm='+$("#fecha_de_nacimientoDiaForm").val() +
              '&fecha_de_nacimientoMesForm='+$("#fecha_de_nacimientoMesForm").val() +
              '&fecha_de_nacimientoAnoForm='+$("#fecha_de_nacimientoAnoForm").val() +
              '&sexoForm='+$("#sexoForm").val() +
			  '&edadForm='+$("#edadForm").val() +
			  '&originarioPaisForm='+$("#originarioPaisForm").val() +
              '&originarioEstadoForm='+$("#originarioEstadoForm").val() +
              '&originarioMunicipioForm='+$("#originarioMunicipioForm").val() +
			  '&estado_civilForm='+$("#estado_civilForm").val() +
			  '&hijosForm='+$("#hijosForm").val() +
              '&estudiosForm='+$("#estudiosForm").val() +
              '&cruzandoForm='+$("#cruzandoForm").val() +
              '&c_fecha_salio_casaAnoForm='+$("#c_fecha_salio_casaAnoForm").val() +
              '&c_fecha_salio_casaMesForm='+$("#c_fecha_salio_casaMesForm").val() +
              '&c_fecha_salio_casaDiaForm='+$("#c_fecha_salio_casaDiaForm").val() +
              '&c_por_donde_cruzoForm='+$("#c_por_donde_cruzoForm").val() +
              '&c_cuanto_cobranCantidadForm='+$("#c_cuanto_cobranCantidadForm").val() +
              '&c_cuanto_cobranMonedaForm='+$(".c_cuanto_cobranMonedaForm:checked").val() +
              '&c_intentosForm='+$("#c_intentosForm").val() +
              '&vivia_euaForm='+$("#vivia_euaForm").val() +
              '&tiempo_detenidoDiasForm='+$("#tiempo_detenidoDiasForm").val() +
              '&tiempo_detenidoMesForm='+$("#tiempo_detenidoMesForm").val() +
              '&v_anos_viviendoForm='+$("#v_anos_viviendoForm").val() +
              '&v_donde_viviaForm='+$("#v_donde_viviaForm").val() +
              '&v_donde_lo_detuvieronForm='+$("#v_donde_lo_detuvieronForm").val() +
              '&tiempo_detenidoForm='+$("#tiempo_detenidoForm").val() +
              '&porque_mas_3_diasForm='+$("#porque_mas_3_diasForm").val() +
              '&victima_abusoForm='+$("#victima_abusoForm").val() +
              '&victima_abusoOtroForm='+$("#victima_abusoOtroForm").val() +
              '&conoce_derechosForm='+$("#conoce_derechosForm").val() +
              '&derechos_violados_porqueForm='+$("#derechos_violados_porqueForm").val() +
              '&como_de_saludForm='+$("#como_de_saludForm").val()+
              '&servicio_moduloForm='+$("#servicio_moduloForm").val()+
              '&id_migranteForm='+$("#id_migranteForm").val()
			}).done(function(result) {
				//alert ($("#sexoForm").val());
                //alert ($("#nextPage").val());
				window.location.href = $("#nextPage").val();		
		});
	    return false;
	});
});