<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORMULARIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: aqua;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Formulario</h1>
  
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="btn-group btn-group-lg align-items-center col-12">
	  <button type="button" class="btn btn-dark btn-md"><a href="index.php">PAGINA PRINCIPAL</a></button>
	</div>	
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12 alert-primary">
		<form action="formu.php" method="POST">
		  <div class="form-group ">
			<label for="Nombres:">Nombres:</label>
			<input type="text" class="form-control"  required name="nombres" placeholder="Ingrese nombres" autocapitalize="sentences">
		  </div>
		  <div class="form-group">
			<label for="Nombres:">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellido" required>
		  </div>
          <div class="form-group ">
			<label for="telefono:">Telefono:</label>
			<input type="tel" class="form-control" name="telefono" placeholder="Ingrese Telefono " maxlength="10" minlength="10" required >
		  </div>
          <div class="form-group ">
			<label for="correoinstitucional:">Correo institucional:</label>
			<input type="email" class="form-control" name="correoInstitucional" placeholder="Ingrese Correo Institucional" required>
		  </div>
		  <div class="form-group">
			<label for="Correo">Correo:</label>
			<input type="email" class="form-control" name="correo" placeholder="Correo electronico" required>
		  </div>
          <div class="form-group ">
			<label for="materia:">Materia:</label>
			<input type="text" class="form-control" name="materia" placeholder="Ingrese materia" required>
		  </div>
          <div class="form-group ">
			<label for="grupo:">Grupo:</label>
			<input type="text" class="form-control" name="grupo" placeholder="Ingrese grupo" required>
		  </div>
          <div class="form-group ">
			<label for="usuarios:">usuario:</label>
			<input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario" required>
		  </div>
          <div class="form-group ">
			<label for="contraseña:">Contraseña:</label>
			<input type="text" class="form-control" name="contraseña" placeholder="Ingrese contraseña" required>
		  </div>
		  <div class="form-group ">
			<label for="contraseña:">Pago:</label>
			<input type="checkbox" class="form-control" name="pago" placeholder="Ingrese contraseña" required>
		  </div>
		  <button type="submit" class="btn btn-primary">AGREGAR</button>
		</form>
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>