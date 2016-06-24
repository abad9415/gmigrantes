<?php
	#####################################################
	#AUTOR: Michael Heriberto Montejano Bermejo (MHMB)	#
	#FECHA: 9 de octubre de 2015						#
	#DESCRIPCIÓN: Script en PHP que realiza la acción 	#
	#para crear un usuario nuevo 						#
	#####################################################
	#HISTORIAL DE MODIFICACIONES						#
	#####################################################
header('Content-Type: text/html; charset=utf-8');
		// Incluimos el archivo de configuración
		include '../../conexionBD.php';
		// Requerimos la clase de usuarios
		require '../../lib/preguntas.php';
		

        //Convertiremos fechas
        /*$c_fecha_salio_casa = $_POST['c_fecha_salio_casaAnoForm'] . "-" . $_POST['c_fecha_salio_casaMesForm'] . "-" . $_POST['c_fecha_salio_casaDiaForm'];*/
    //echo $c_fecha_salio_casa;
        
		//Instanciamos nuestra clase usuarios
		$preguntas = new preguntas($datosConexionBD);
		//Le damos valor a los atributos

        if ($_POST['fecha_de_nacimientoAnoForm']==""){
            $preguntas->fecha_de_nacimiento = "";
        }else{
             $preguntas->fecha_de_nacimiento = $_POST['fecha_de_nacimientoAnoForm'] . "-" . $_POST['fecha_de_nacimientoMesForm'] . "-" . $_POST['fecha_de_nacimientoDiaForm'];
        }

        if ($_POST['c_fecha_salio_casaAnoForm']==""){
            $preguntas->c_fecha_salio_casa = "";
        }else{
             $preguntas->c_fecha_salio_casa = $_POST['c_fecha_salio_casaAnoForm'] . "-" . $_POST['c_fecha_salio_casaMesForm'] . "-" . $_POST['c_fecha_salio_casaDiaForm'];
        }
        
        if ($_POST['c_cuanto_cobranCantidadForm']==""){
            $preguntas->c_cuanto_cobran = "";
        }else{
             $preguntas->c_cuanto_cobran = $_POST['c_cuanto_cobranCantidadForm'] . "-" . $_POST['c_cuanto_cobranMonedaForm'];
        }

       
        if ($_POST['originarioPaisForm']=="")
        {
              $preguntas->originario ="";
        }else{
            $preguntas->originario =$_POST['originarioPaisForm']."-".$_POST['originarioEstadoForm']."-".$_POST['originarioMunicipioForm'];
        }


        if ($_POST['tiempo_detenidoDiasForm']=="")
        {
             $preguntas->tiempo_detenido = "";
        }else{
            $preguntas->tiempo_detenido = $_POST['tiempo_detenidoDiasForm'] . "-" . $_POST['tiempo_detenidoMesForm'];
        }
       
        if ($_POST['victima_abusoForm']=="")
        {
             $preguntas->victima_abuso = "";
        }else{
            if($_POST['victima_abusoForm']=="Otro")
            {
                $preguntas->victima_abuso = $_POST['victima_abusoForm'] . ":" . $_POST['victima_abusoOtroForm'];
            }else{
                $preguntas->victima_abuso = $_POST['victima_abusoForm'];
            }
            
        }
       

		$preguntas->id_migrante = $_POST['id_migranteForm'];
		$preguntas->ape_paterno = $_POST['ape_paternoForm'];
		$preguntas->ape_materno = $_POST['ape_maternoForm'];
		$preguntas->nombre = $_POST['nombreForm'];
        $preguntas->sexo = $_POST['sexoForm'];
		$preguntas->edad = $_POST['edadForm'];
		
		$preguntas->estado_civil = $_POST['estado_civilForm'];
        $preguntas->hijos = $_POST['hijosForm'];
        $preguntas->estudios = $_POST['estudiosForm'];
        $preguntas->cruzando = $_POST['cruzandoForm'];
        
        $preguntas->c_por_donde_cruzo = $_POST['c_por_donde_cruzoForm'];
        
        $preguntas->c_intentos = $_POST['c_intentosForm'];
        $preguntas->vivia_eua = $_POST['vivia_euaForm'];
        $preguntas->v_anos_viviendo = $_POST['v_anos_viviendoForm'];
        $preguntas->v_donde_vivia = $_POST['v_donde_viviaForm'];
        $preguntas->v_donde_lo_detuvieron = $_POST['v_donde_lo_detuvieronForm'];
        
        $preguntas->porque_mas_3_dias = $_POST['porque_mas_3_diasForm'];
        
        $preguntas->conoce_derechos = $_POST['conoce_derechosForm'];
        $preguntas->derechos_violados_porque = $_POST['derechos_violados_porqueForm'];
        $preguntas->como_de_salud = $_POST['como_de_saludForm'];
        $preguntas->servicio_modulo = $_POST['servicio_moduloForm'];
		echo $preguntas->actualizarRespuestas();
?>