<?php 
	include_once 'conexion.php';

	if(isset($_POST['guardar'])){
		$carro=$_POST['carro'];
		$ano=$_POST['ano'];
		$modelo=$_POST['modelo'];
		$color=$_POST['color'];
		$precio=$_POST['precio'];
		$detalles=$_POST['detalles'];
		$fecha=$_POST['fecha'];

		if(!empty($carro) && !empty($ano) && !empty($modelo) && !empty($color) && !empty($precio) && !empty($detalles)&& !empty($fecha) ){
			
				$consulta_insert=$con->prepare('INSERT INTO crud_autosvendidos(carro,ano,modelo,color,precio,detalles,fecha)  VALUES(:carro,:ano,:modelo,:color,:precio,:detalles,:fecha)');
				$consulta_insert->execute(array(
					':carro' =>$carro,
					':ano' =>$ano,
					':modelo' =>$modelo,
					':color' =>$color,
					':precio' =>$precio,
					':detalles' =>$detalles,
					':fecha' =>$fecha
				));
				header('Location: autosvendidos.php');
		}else{
			echo "<script> alert('Asegurate de rellenar todos los campos correctamente');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo auto vendido</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="carro" placeholder="Carro" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="ano" placeholder="Año" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="modelo" placeholder="Modelo" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="color" placeholder="Color" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" placeholder="Precio" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="detalles" placeholder="Detalles" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="fecha" placeholder="Fecha" class="input__text">
			</div>
			<div class="btn__group">
				<a href="autosvendidos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos recibidos!')">
			</div>
		</form>
	</div>
</body>
</html>
