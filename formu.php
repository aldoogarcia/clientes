<?php
	require('conexion.php');
	
	$nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correoInstitucional = $_POST['correoinstitucional'];
    $correo = $_POST['correo'];
    $materia = $_POST['materia'];
    $grupo = $_POST['grupo'];
    $usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	
	$sentencia = "INSERT INTO alumnos1 (nombre,apellido,telefono,correoinstitucional,correo,materia,grupo,usuario,contraseña) VALUES
					('$nombres','$apellidos','$telefono','$correoInstitucional','$correo','$materia','$grupo','$usuario','$contraseña')";
	if (mysqli_query($conexion,$sentencia)){
        echo "<td> <a href='index.php'><button type='button' class='btn btn-info btn-sm'>conexion exitosa</button></a> </td>";
	}else{
		echo "Error: " . mysqli_error($conexion);
	}
?>