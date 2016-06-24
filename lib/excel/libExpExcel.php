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
    $output = '';
    
    $result = $preguntas->consultarRespuestas();


        if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" bordered="1">  
                     <tr> 
                          <th>No.</th>
                          <th>Apellido Paterno</th>  
                          <th>Apellido Materno</th>  
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Originario</th>
                          <th>Estado Civil</th>
                          <th>Hijos</th>
                          <th>Estudios</th>
                          <th>Cuando lo detuvieron...</th>
                          <th>Fecha en que salio de casa</th>
                          
                          <th>Fecha</th>
                          <th>Hora</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {
               $cFechaSalioCasa = $row['c_fecha_salio_casa'];
                $output .= '  
                     <tr>  
                          <td>'.$row['id_migrante'].'</td>
                          <td>'.$row['ape_paterno'].'</td>  
                          <td>'.$row['ape_materno'].'</td>  
                          <td>'.$row['nombre'].'</td>
                          <td>'.$row['edad'].'</td>
                          <td>'.$row['originario'].'</td>
                          <td>'.$row['estado_civil'].'</td>
                          <td>'.$row['hijos'].'</td>
                          <td>'.$row['estudios'].'</td>
                          <td>'.$row['cruzando'].'</td>
                          <td>'.$row['c_fecha_salio_casa'].'</td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }  
?>