<?php 
	include_once 'conexion.php';

	if(isset($_POST['guardar'])){
		$num_venta=$_POST['num_venta'];
		$fecha=$_POST['fecha'];
		$empleado=$_POST['empleado'];
		$num_tel=$_POST['num_tel'];
		$tarjeta=$_POST['tarjeta'];
		$total=$_POST['total'];
		$carro=$_POST['carro'];

		if(!empty($num_venta) && !empty($fecha) && !empty($empleado) && !empty($num_tel) && !empty($tarjeta) && !empty($total)&& !empty($carro) ){
			
				$consulta_insert=$con->prepare('INSERT INTO crud_venta(num_venta,fecha,empleado,num_tel,tarjeta,total,carro) VALUES(:num_venta,:fecha,:empleado,:num_tel,:tarjeta,:total,:carro)');
				$consulta_insert->execute(array(
					':num_venta' =>$num_venta,
					':fecha' =>$fecha,
					':empleado' =>$empleado,
					':num_tel' =>$num_tel,
					':tarjeta' =>$tarjeta,
					':total' =>$total,
					':carro' =>$carro
				));
				header('Location: venta.php');
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
				<input type="text" name="num_venta" placeholder="Número de venta" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="fecha" placeholder="Fecha" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="empleado" placeholder="Nombre del empleado" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="num_tel" placeholder="Número de télefono" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="tarjeta" placeholder="Nombre del cliente" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="total" placeholder="Total a pagar" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="carro" placeholder="Auto comprado" class="input__text">
			</div>
			<div class="btn__group">
				<a href="venta.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos recibidos!')">
			</div>
		</form>
	</div>
</body>
</html>
