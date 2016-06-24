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
    $idMigrante = null;
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
    $output = '';
    
    $result = $preguntas->consultarRespuestas();
    $x=0;
    while($row = $result->fetch_assoc()) {
			//Declaramos las variables de los atributos de mi clase usuario
            $idMigrante[$x] = $row['id_migrante'];
			$ape_paterno[$x] = $row['ape_paterno'];
			$ape_materno[$x] = $row['ape_materno'];
            $nombre[$x] = $row['nombre'];
            $sexo[$x] = $row['sexo'];
            $fecha_de_nacimiento[$x] = $row['fecha_de_nacimiento'];
            $edad[$x] = $row['edad'];
            $originario[$x] = $row['originario'];
            $estado_civil[$x] = $row['estado_civil'];
            $hijos[$x] = $row['hijos'];
            $estudios[$x] = $row['estudios'];
            $cruzando[$x] = $row['cruzando'];
            $c_fecha_salio_casa[$x] = $row['c_fecha_salio_casa'];
            $c_por_donde_cruzo[$x] = $row['c_por_donde_cruzo'];
            $c_cuanto_cobran[$x] = $row['c_cuanto_cobran'];
            $c_intentos[$x] = $row['c_intentos'];
            $vivia_eua[$x] = $row['vivia_eua'];
            $v_anos_viviendo[$x] = $row['v_anos_viviendo'];
            $v_donde_vivia[$x] = $row['v_donde_vivia'];
            $v_donde_lo_detuvieron[$x] = $row['v_donde_lo_detuvieron'];
            $tiempo_detenido[$x] = $row['tiempo_detenido'];
            $porque_mas_3_dias[$x] = $row['porque_mas_3_dias'];
            $victima_abuso[$x] = $row['victima_abuso'];
            $conoce_derechos[$x] = $row['conoce_derechos'];
            $derechos_violados_porque[$x] = $row['derechos_violados_porque'];
            $como_de_salud[$x] = $row['como_de_salud'];
            $servicio_modulo[$x] = $row['servicio_modulo'];
            $observaciones[$x] = $row['observaciones'];
        $x++;
		}
        $output0 = '
                <table class="table"> 
                <tr>
                <th colspan="8">Modulo Fronterizo de atenci&oacute;n al migrante deportado "Juntos en el Camino" Garita #1 Zona centro de Mexicali</th>
                </tr>
                <tr>
                <th colspan="3">Pastoral Social  "C&aacute;ritas" Di&oacute;cesis de Mexicali</th>
                <th colspan="5">Tel 686-551-9060</th>
                </tr>
                <tr>
                </tr>
                </table> ';
        if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" border="1">  
                     <tr> 
                          <th bgcolor=#A2A2A2>No.</th>
                          <th bgcolor=#A2A2A2>Nombre</th>  
                          <th bgcolor=#A2A2A2>Edad</th>
                          <th bgcolor=#A2A2A2>Fecha Nac.</th>
                          <th bgcolor=#A2A2A2>Sexo</th>
                          <th bgcolor=#A2A2A2>Pais/Estado/Municipio</th>
                          <th bgcolor=#A2A2A2>frontera</th>
                          <th bgcolor=#A2A2A2 WIDTH="500">Observaciones</th>
                     </tr>  
           ';  
           for($x2=0;$x2<$x;$x2++)  
           {
               $originarioArray = explode("-", $originario[$x2]);
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
               if ($x2%2==0){
                $output .= '  
                     <tr>  
                          <td bgcolor=#EFEFEF>'.$idMigrante[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$nombre[$x2]." ".$ape_paterno[$x2]." ".$ape_materno[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$edad[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$fecha_de_nacimiento[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$sexo[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$originarioPais." ".$originarioEstado." ".$originarioMunicipio.'</td>
                          <td bgcolor=#EFEFEF>'.$c_por_donde_cruzo[$x2].'</td>
                          <td bgcolor=#EFEFEF>'.$observaciones[$x2].'</td>
                        
                     </tr>  
                '; 
                }else{
                    $output .= '  
                     <tr>  
                          <td>'.$idMigrante[$x2].'</td>
                          <td>'.$nombre[$x2]." ".$ape_paterno[$x2]." ".$ape_materno[$x2].'</td>
                          <td>'.$edad[$x2].'</td>
                          <td>'.$fecha_de_nacimiento[$x2].'</td>
                          <td>'.$sexo[$x2].'</td>
                          <td>'.$originarioPais." ".$originarioEstado." ".$originarioMunicipio.'</td>
                          <td>'.$c_por_donde_cruzo[$x2].'</td>
                          <td>'.$observaciones[$x2].'</td>
                        
                     </tr>  
                '; 
                }
                 
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=lista_de_asistencia_general.xls");  
           echo $output0.$output;  
      }  
?>