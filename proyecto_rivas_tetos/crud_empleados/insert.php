<?php 
	include_once 'conexion.php';

	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$sexo=$_POST['sexo'];
		$edad=$_POST['edad'];
		$sueldo=$_POST['sueldo'];
		$puesto=$_POST['puesto'];
		$antiguedad=$_POST['antiguedad'];
		$num_tel=$_POST['num_tel'];

		if(!empty($nombre) && !empty($sexo) && !empty($edad) && !empty($sueldo) && !empty($puesto) && !empty($antiguedad)&& !empty($num_tel) ){
			
				$consulta_insert=$con->prepare('INSERT INTO crud_empleados(nombre,sexo,edad,sueldo,puesto,antiguedad,num_tel) VALUES(:nombre,:sexo,:edad,:sueldo,:puesto,:antiguedad,:num_tel)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':sexo' =>$sexo,
					':edad' =>$edad,
					':sueldo' =>$sueldo,
					':puesto' =>$puesto,
					':antiguedad' =>$antiguedad,
					':num_tel' =>$num_tel
				));
				header('Location: empleados.php');
		}else{
			echo "<script> alert('Asegurate de rellenar todos los campos correctamente');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Empleado</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre completo" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="sexo" placeholder="Sexo" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="edad" placeholder="Edad" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="sueldo" placeholder="Sueldo semanal" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="puesto" placeholder="Puesto del empleado" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="antiguedad" placeholder="Antiguedad del empleado" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="num_tel" placeholder="Télefono del empleado" class="input__text">
			</div>
			<div class="btn__group">
				<a href="empleados.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos recibidos!')">
			</div>
		</form>
	</div>
</body>
</html>
