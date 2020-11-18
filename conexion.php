<?php
	$conexion = new mysqli("localhost","root","","alumnos",);
	if(mysqli_connect_errno()){
		echo 'Conexion fallida: ', mysqli_connect_error();
		exit();
	}else{
		echo 'Conexion exitosa..';
	}
?>