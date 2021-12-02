<?php 
	include_once 'conexion.php';

	if(isset($_POST['guardar'])){
		$marca=$_POST['marca'];
		$modelo=$_POST['modelo'];
		$ano=$_POST['ano'];
		$color=$_POST['color'];
		$num_serie=$_POST['num_serie'];
		$placas=$_POST['placas'];
		$precio=$_POST['precio'];

		if(!empty($marca) && !empty($modelo) && !empty($ano) && !empty($color) && !empty($num_serie) && !empty($placas)&& !empty($precio) ){
			
				$consulta_insert=$con->prepare('INSERT INTO crud_autos(marca,modelo,ano,color,num_serie,placas,precio) VALUES(:marca,:modelo,:ano,:color,:num_serie,:placas,:precio)');
				$consulta_insert->execute(array(
					':marca' =>$marca,
					':modelo' =>$modelo,
					':ano' =>$ano,
					':color' =>$color,
					':num_serie' =>$num_serie,
					':placas' =>$placas,
					':precio' =>$precio
				));
				header('Location: autos.php');
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
				<input type="text" name="marca" placeholder="Marca" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="modelo" placeholder="Modelo" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="ano" placeholder="Año" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="color" placeholder="Color" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="num_serie" placeholder="Número de serie" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="placas" placeholder="Matrícula" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" placeholder="Precio" class="input__text">
			</div>
			<div class="btn__group">
				<a href="autos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos recibidos!')">
			</div>
		</form>
	</div>
</body>
</html>
