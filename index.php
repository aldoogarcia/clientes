<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: black;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Consultas</h1>
   
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="btn-group btn-group-lg align-items-center col-12">
	  <button type="button" class="btn btn-link btn-md"><a href="formulario.php">AGREGAR CONTACTO</a></button>
	</div>	
</nav>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
		<form class="form-inline mt-2 mt-md-0" method="POST">
			<input class="form-control mr-sm-2" type="text" name="contacto" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
		</form>     
    </div> </div></div>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12 alert-primary">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">Id</th>
			  <th scope="col">Nombres</th>
			  <th scope="col">Apellidos</th>
              <th scope="col">Telefono</th>
			  <th scope="col">Correo institucional</th>
			  <th scope="col">Correo personal</th>
              <th scope="col">Materia</th>
              <th scope="col">Grupo</th>
              <th scope="col">usuario</th>
              <th scope="col">contraseña</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				require('conexion.php');
				$sentencia = "SELECT *FROM alumnos1";
        $consulta = mysqli_query($conexion,$sentencia);
                    if(!empty($_POST))
                    {
                       require('conexion.php');
                       $cadena = $_POST['contacto'];
                       $sentencia = " SELECT *FROM alumnos1 WHERE nombre LIKE '%".$cadena."%'";
                       $consulta = mysqli_query($conexion,$sentencia);
                    if (mysqli_num_rows($consulta) > 0)
                    {
                        while ($valor = mysqli_fetch_assoc($consulta))
                        {
                            echo "<tr>";
                                echo "<td>"; echo $valor['id']; echo "</td>";
                                echo "<td>"; echo $valor['nombre']; echo "</td>";
                                echo "<td>"; echo $valor['apellido']; echo "</td>";
                                echo "<td>"; echo $valor['telefono']; echo "</td>";
                                echo "<td>"; echo $valor['correoinstitucional']; echo "</td>";
                                echo "<td>"; echo $valor['correo']; echo "</td>";
                                echo "<td>"; echo $valor['materia']; echo "</td>";
                                echo "<td>"; echo $valor['grupo']; echo "</td>";
                                echo "<td>"; echo $valor['usuario']; echo "</td>";
                                echo "<td>"; echo $valor['contraseña']; echo "</td>";

                               # echo "<td> <a href='actualizar.php?no=".$valor['idcontacto']."''><button type='button' class='btn btn-info btn-sm'>MODIFICAR</button></a> </td>";
                                #echo "<td> <a href='borradologico.php?no=".$valor['idcontacto']."''><button type='button' class='btn btn-primary btn-sm'>LOGICO</button></a> </td>";
                                #echo "<td> <a href='borradofisico.php?no=".$valor['idcontacto']."''><button type='button' class='btn btn-danger btn-sm'>FISICO</button></a> </td>";
                            echo "</tr>";


                       
						
                        }
                        
                    }else{
                            echo "<tr>";
                                echo "<td>"; echo "NO SE ENCONTRARON VALORES..."; echo "</td>";
                            echo "</tr>";
                        
                    }
                            
                }
                


               
               
			?>			
		  </tbody>
		</table>      
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>