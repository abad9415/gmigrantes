<?php
	// Incluimos el archivo de configuración
	include '../../conexionBD.php';
	// Requerimos la clase de usuarios
	require '../../lib/preguntas.php';
	
	//Instanciamos nuestra clase usuarios
	$preguntas = new preguntas($datosConexionBD);
    $i=0;
    $id=[];
    $c_ape_paterno = null;
    $c_ape_materno = null;
    $c_servicio_modulo = null;
    
    $ape_paterno = null;
    $ape_materno = null;
    $nombre = null;
    $sexo = null;
    $fecha_de_nacimiento = null;
    $edad = null;
    $originario = null;
    $estado_civil = null;
    $hijos = null;
    $estudios = null;
    $cruzando = null;
    $c_fecha_salio_casa = null;
    $c_por_donde_cruzo = null;
    $c_cuanto_cobran = null;
    $c_intentos = null;
    $vivia_eua = null;
    $v_anos_viviendo = null;
    $v_donde_vivia = null;
    $v_donde_lo_detuvieron = null;
    $tiempo_detenido = null;
    $porque_mas_3_dias = null;
    $victima_abuso = null;
    $conoce_derechos = null;
    $derechos_violados_porque = null;
    $como_de_salud = null;
    $servicio_modulo = null;
    
    $idR = $preguntas->consultaId();
    while($row = $idR->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
			//$id = $row['id_migrante'];
         $i++;
        $id[$i] = $row['id_migrante'];
		}
  //  echo "El id mas alto es: " . $id[$i];
	//$preguntas = $preguntas->consultaPreguntas();
	
    //QUERY PARA PREGUNTAS LLENAS
       $preguntas->id_migrante = $id[$i];
		$preguntasR = $preguntas->consultarPreguntasxId();
		//print_r($result);
		while($row = $preguntasR->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
            $c_servicio_modulo = $row['servicio_modulo'];
		}
        if($c_servicio_modulo==""){
           // echo "servicio es nada";
        }else{
            //echo "Servicio esta lleno";
            $nuevoId = $preguntas->nuevoId();
             $idR = $preguntas->consultaId();
            while($row = $idR->fetch_assoc()) {
                    //Declaramos las variables de los atributos de mi clase usuario
                    //$id = $row['id_migrante'];
                 $i++;
                $id[$i] = $row['id_migrante'];
                }
           // echo "El id mas ahora es alto es: " . $id[$i];
        }
    //echo "Servicios del modulo: " . $servicio_modulo;
    //FIN DE QUERY PARA PREGUNTAS LLENAS

/*Nueva consulta de id incrmeentado*/
 $preguntas->id_migrante = $id[$i];
$idForm = $id[$i];
		$preguntasR = $preguntas->consultarPreguntasxId();
		//print_r($result);
		while($row = $preguntasR->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
			$ape_paterno = $row['ape_paterno'];
			$ape_materno = $row['ape_materno'];
            $nombre = $row['nombre'];
            $sexo = $row['sexo'];
            $fecha_de_nacimiento = $row['fecha_de_nacimiento'];
            $edad = $row['edad'];
            $originario = $row['originario'];
            $estado_civil = $row['estado_civil'];
            $hijos = $row['hijos'];
            $estudios = $row['estudios'];
            $cruzando = $row['cruzando'];
            $c_fecha_salio_casa = $row['c_fecha_salio_casa'];
            $c_por_donde_cruzo = $row['c_por_donde_cruzo'];
            $c_cuanto_cobran = $row['c_cuanto_cobran'];
            $c_intentos = $row['c_intentos'];
            $vivia_eua = $row['vivia_eua'];
            $v_anos_viviendo = $row['v_anos_viviendo'];
            $v_donde_vivia = $row['v_donde_vivia'];
            $v_donde_lo_detuvieron = $row['v_donde_lo_detuvieron'];
            $tiempo_detenido = $row['tiempo_detenido'];
            $porque_mas_3_dias = $row['porque_mas_3_dias'];
            $victima_abuso = $row['victima_abuso'];
            $conoce_derechos = $row['conoce_derechos'];
            $derechos_violados_porque = $row['derechos_violados_porque'];
            $como_de_salud = $row['como_de_salud'];
            $servicio_modulo = $row['servicio_modulo'];
		}
/*Fin de Nueva consulta de id incrmeentado*/
$FechaNacimientoArray = explode("-", $fecha_de_nacimiento);
$resultadoFechaNacimientoArray = count($FechaNacimientoArray);
if($resultadoFechaNacimientoArray==3)
{
   $dia = $FechaNacimientoArray[2];  
 $mes = $FechaNacimientoArray[1]; 
 $anio = $FechaNacimientoArray[0]; 
$diac =date("d"); 
       $mesc =date("m"); 
       $anioc =date("Y"); 
$edad =  $anioc-$anio;
 if($mesc < $mes && $diac < $dia || $mesc < $mes || $diac < $dia){ 

    $edad_aux = $edad - 1; 

     $edad = $edad_aux; 
     }
}

 

/*Empezamos a desbaratar la c_fecha_salio_casa */
$FechaArray = explode("-", $c_fecha_salio_casa);
$resultadoFechaArray = count($FechaArray);
/*Fin de  desbaratar la c_fecha_salio_casa */
/*Empezamos a desbaratar la duracion detenido */
$tiempoDetenidoArray = explode("-", $tiempo_detenido);
$resultadotiempoDetenido = count($tiempoDetenidoArray);
if($resultadotiempoDetenido==2){
    $tiempo_detenidoDias = $tiempoDetenidoArray[0];
    $tiempo_detenidoMes = $tiempoDetenidoArray[1];
}else{
    $tiempo_detenidoDias = "";
    $tiempo_detenidoMes = "";
}
//echo $c_cuanto_cobran;
/*Fin de  desbaratar la duracion detenido*/
$originarioArray = explode("-", $originario);
$resultadoOriginario = count($originarioArray);
if($resultadoOriginario==3){
    $originarioPais = $originarioArray[0];
    $originarioEstado = $originarioArray[1];
    $originarioMunicipio = $originarioArray[2];
}else{
    $originarioPais = "";
    $originarioEstado = "";
    $originarioMunicipio = "";
}

//Inicio cuanto cobran divison para monedas junto con precio
$cCuantoCobranArray = explode("-", $c_cuanto_cobran);
$resultadoCuantoCobran = count($cCuantoCobranArray);
if($resultadoCuantoCobran=="2"){
    $cantidadCuantoCobran = $cCuantoCobranArray[0];
    $monedaCuantoCobran = $cCuantoCobranArray[1];
}else{
    $cantidadCuantoCobran = "";
    $monedaCuantoCobran = "";
}
//Fin cuanto cobran divison para monedas junto con precio
/*INICIO Otro tipo de abuso*/
$abusoOtroArray = explode(":", $victima_abuso);
$resultadoAbusoOtroArray = count($abusoOtroArray);
if($resultadoAbusoOtroArray==2)
{
    $tipoAbuso = $abusoOtroArray [0]; // esta variabnle es para el select
    $tipoAbusoOtro = $abusoOtroArray [1]; //este es la casilla parta comentar el tipo de abuso elejido en otro...
}else{
    $tipoAbuso = $victima_abuso;
    $tipoAbusoOtro = "";
}
/*FIN Otro tipo de abuso*/
?>