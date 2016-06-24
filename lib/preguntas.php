<?php
 date_default_timezone_set('America/Tijuana');
    class preguntas{
        var $id_migrante;
        var $id_encuesta;
        var $fecha;
        var $hora;
        var $encuestador;
        var $ape_paterno;
        var $ape_materno;
        var $nombre;
        var $sexo;
        var $fecha_de_nacimiento;
        var $edad;
        var $originario;
        var $estado_civil;
        var $hijos;
        var $estudios;
        var $cruzando;
        var $c_fecha_salio_casa;
        var $c_por_donde_cruzo;
        var $c_cuanto_cobran;
        var $c_intentos;
        var $vivia_eua;
        var $v_anos_viviendo;
        var $v_donde_vivia;
        var $v_donde_lo_detuvieron;
        var $tiempo_detenido;
        var $porque_mas_3_dias;
        var $victima_abuso;
        var $conoce_derechos;
        var $derechos_violados_porque;
        var $como_de_salud;
        var $servicio_modulo;
        var $observaciones;
        private $datosConexionBD;
        
        //Declaramos el método constructor
		 function __construct($datosConexionBD){
		 	$this->datosConexionBD=$datosConexionBD;
		 }
        
        public function consultaId(){
            /* conectamos a la bd */
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $query = "SELECT MAX(id_migrante) AS id_migrante FROM encuestacorta";//sentencia de SQL para realizar una consulta
            $resultado = $mysqli->query($query);
            
            if(!$resultado){//If es una condicional
                printf("Error Message: %s\n", $mysqli->error);//Imprime un string con el problema generado a partir de $query
            }	
			$mysqli->close();//cierra la conexion con la BD
            
            return $resultado;
        }
        
        public function consultarPreguntasxId(){
            /* conectamos a la bd */
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $query = "SELECT * FROM encuestacorta WHERE id_migrante='".$this->id_migrante."'";//sentencia de SQL para realizar una consulta
            $resultado = $mysqli->query($query);
            if(!$resultado){//If es una condicional
                printf("Error Message: %s\n", $mysqli->error);//Imprime un string con el problema generado a partir de $query
            }
			$mysqli->close();//cierra la conexion con la BD
            return $resultado;
        }
        
        public function nuevoId(){
            $fechaSistema = date("d-m-y"); 
            $horaSistema = date("H:i:s");
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $query = 
				"INSERT INTO encuestacorta (id_migrante,
						id_encuesta,
						fecha,
						hora,
						encuestador,
                        ape_paterno,
						ape_materno,
                        nombre,
                        sexo,
                        fecha_de_nacimiento,
                        edad,
                        originario,
                        estado_civil,
                        hijos,
                        estudios,
                        cruzando,
                        c_fecha_salio_casa,
                        c_por_donde_cruzo,
                        c_cuanto_cobran,
                        c_intentos,
                        vivia_eua,
                        v_anos_viviendo,
                        v_donde_vivia,
                        v_donde_lo_detuvieron,
                        tiempo_detenido,
                        porque_mas_3_dias,
                        victima_abuso,
                        conoce_derechos,
                        derechos_violados_porque,
                        como_de_salud,
                        servicio_modulo,
                        observaciones)
					VALUES (NULL, 
						'1',
						'".$fechaSistema."',  
						'".$horaSistema."',  
						'Sistema',
						'',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '')";
			
			$resultado=$mysqli->query($query);
			if (!$resultado) {
				 return (printf ("Errormessage: %s\n", $mysqli->error));
			}
			else{
				/* close connection */
				$mysqli->close();
				return 'Alta exitosa';
			}	
        }
        
        public function actualizarRespuestas(){
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $fechaSistema = date("d-m-y"); 
            $horaSistema = date("H:i:s");
            if($this->victima_abuso != "No")
            {
                $observaciones = $this->victima_abuso.",";
            }
            if($this->derechos_violados_porque != "No")
            {
                $observaciones .= " Siente que violaron sus derechos porque: ".$this->derechos_violados_porque.",";
            }
            $observaciones .= " Salud: ".$this->como_de_salud;
            $query ="
					UPDATE  encuestacorta 
						SET 
                        fecha = '".$fechaSistema."',
                        hora = '".$horaSistema."',
				        ape_paterno = '".$this->ape_paterno."',
						ape_materno = '".$this->ape_materno."',
                        nombre = '".$this->nombre."',
                        sexo = '".$this->sexo."',
                        fecha_de_nacimiento = '".$this->fecha_de_nacimiento."',
                        edad = '".$this->edad."',
                        originario = '".$this->originario."',
                        estado_civil = '".$this->estado_civil."',
                        hijos = '".$this->hijos."',
                        estudios = '".$this->estudios."',
                        cruzando = '".$this->cruzando."',
                        c_fecha_salio_casa = '".$this->c_fecha_salio_casa."',
                        c_por_donde_cruzo = '".$this->c_por_donde_cruzo."',
                        c_cuanto_cobran = '".$this->c_cuanto_cobran."',
                        c_intentos = '".$this->c_intentos."',
                        vivia_eua = '".$this->vivia_eua."',
                        v_anos_viviendo = '".$this->v_anos_viviendo."',
                        v_donde_vivia = '".$this->v_donde_vivia."',
                        v_donde_lo_detuvieron = '".$this->v_donde_lo_detuvieron."',
                        tiempo_detenido = '".$this->tiempo_detenido."',
                        porque_mas_3_dias = '".$this->porque_mas_3_dias."',
                        victima_abuso = '".$this->victima_abuso."',
                        conoce_derechos = '".$this->conoce_derechos."',
                        derechos_violados_porque = '".$this->derechos_violados_porque."',
                        como_de_salud = '".$this->como_de_salud."',
                        servicio_modulo = '".$this->servicio_modulo."',
                        observaciones = '".$observaciones."'
						WHERE id_migrante = ".$this->id_migrante;
            $resultado = $mysqli->query($query);
            if (!$resultado) {
                     return (printf ("Errormessage: %s\n", $mysqli->error));
                }else{
                    /* close connection */
                    $mysqli->close();
                    return 'Cambio exitoso';
                }
        }
        
        public function consultarRespuestas(){
             /* conectamos a la bd */
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $query = "SELECT * FROM encuestacorta";//sentencia de SQL para realizar una consulta
            $resultado = $mysqli->query($query);
            if(!$resultado){//If es una condicional
                printf("Error Message: %s\n", $mysqli->error);//Imprime un string con el problema generado a partir de $query
            }
			$mysqli->close();//cierra la conexion con la BD
            return $resultado;
            
        }
         public function consultarRespuestasHoy(){
             $fechaHoy=date("d-m-y");
             /* conectamos a la bd */
            $mysqli = new mysqli($this->datosConexionBD[0], $this->datosConexionBD[1], $this->datosConexionBD[2], $this->datosConexionBD[3]);
			/* check connection */
			if (mysqli_connect_errno()) {
				printf("Error de conexión: %s\n", mysqli_connect_error());
				exit();
			}
            $query = "SELECT * FROM encuestacorta WHERE fecha='$fechaHoy'";//sentencia de SQL para realizar una consulta
            $resultado = $mysqli->query($query);
            if(!$resultado){//If es una condicional
                printf("Error Message: %s\n", $mysqli->error);//Imprime un string con el problema generado a partir de $query
            }
			$mysqli->close();//cierra la conexion con la BD
            return $resultado;
            
        }
     }
?>