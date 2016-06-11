<?php
	#####################################################
	#AUTOR: Michael Heriberto Montejano Bermejo (MHMB)	#
	#FECHA: 9 de octubre de 2015						#
	#DESCRIPCIÓN: Script en PHP que realiza la acción 	#
	#para crear un usuario nuevo 						#
	#####################################################
	#HISTORIAL DE MODIFICACIONES						#
	#####################################################
		// Incluimos el archivo de configuración
		include '../../conexionBD.php';
		// Requerimos la clase de usuarios
		require '../../lib/preguntas.php';
		
		//Instanciamos nuestra clase usuarios
		$preguntas = new preguntas($datosConexionBD);
		//Le damos valor a los atributos
		$preguntas->id = $_POST['id'];
		$preguntas->nombre = $_POST['nombre'];
		$preguntas->apellidoPaterno = $_POST['apellidoPaterno'];
		$preguntas->apellidoMaterno = $_POST['apellidoMaterno'];
		$preguntas->puesto = $_POST['puesto'];
		$preguntas->rol =$_POST['rol'];
		$preguntas->correo = $_POST['email'];
		$preguntas->contrasenia = md5($_POST['contrasenia']);
		echo $usuarios->actualizarUsuario();
?>