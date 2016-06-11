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
			$c_ape_paterno = $row['ape_paterno'];
			$c_ape_materno = $row['ape_materno'];
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
            $servicio_modulo = $row['servicio_modulo'];
		}
/*Fin de Nueva consulta de id incrmeentado*/
?>