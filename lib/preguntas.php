<?php
    class preguntas{
        var $id_migrante;
        var $id_encuesta;
        var $fecha;
        var $hora;
        var $encuestador;
        var $ape_paterno;
        var $ape_materno;
        var $nombre;
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
        var $servicio_modulo;
        private $datosConexionBD;
        
        //Declaramos el método constructor
		 function __construct($datosConexionBD){
		 	$this->datosConexionBD=$datosConexionBD;
		 }
        
        public function etapa1(){
            
        }
        
    }
?>