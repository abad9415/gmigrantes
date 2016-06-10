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
	
	// Incluimos el archivo de configuración
	include '../../conexionBD.php';
	// Requerimos la clase de usuarios
	require '../../lib/preguntas.php';
	
	//Instanciamos nuestra clase usuarios
	$preguntas = new preguntas($datosConexionBD);
    $idR = $preguntas->consultaId();
    $i=0;
    $id=[];
    $ape_paterno = null;
    $ape_materno = null;
    $servicio_modulo = null;
    while($row = $idR->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
			//$id = $row['id_migrante'];
         $i++;
        $id[$i] = $row['id_migrante'];
		}
    echo "El id mas alto es: " . $id[$i];
	//$preguntas = $preguntas->consultaPreguntas();
	
    //QUERY PARA PREGUNTAS LLENAS
       $preguntas->id_migrante = $id[$i];
		$preguntasR = $preguntas->consultarPreguntasxId();
		//print_r($result);
		while($row = $preguntasR->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
			$ape_paterno = $row['ape_paterno'];
			$ape_materno = $row['ape_materno'];
            $servicio_modulo = $row['servicio_modulo'];
		}
        if($servicio_modulo==null){
            echo "servicio es nada";
        }else{
            $nuevoId = $preguntas->nuevoId();
        }
    echo "Servicios del modulo: " . $servicio_modulo;
    //FIN DE QUERY PARA PREGUNTAS LLENAS
?>
<body onload = "document.eCorta1.aPaterno.focus() ">
<form name="eCorta1" action="">
   <div class="divPreguntas">
      <div class="divInputs">
          <label for="aPaterno"><strong>Apellido Paterno</strong></label>
          <input type="text" id="aPaterno" class="txt-center" name="aPaterno" required value="<?=$ape_paterno?>">
          <label for="aPaterno"><strong>Apellido Materno</strong></label>
          <input type="text" id="aMaterno" class="txt-center" name="aMaterno" required value="<?=$ape_materno?>">
      </div>
            <a href="2.php" class="txt-right"><span class="icon-arrow-right2"></span></a>
    </div>
</form>

<?php
include '../../vistas/footer.php';
?>