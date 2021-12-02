<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM crud_venta WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: venta.php');
	}


	if(isset($_POST['guardar'])){
		$num_venta=$_POST['num_venta'];
		$fecha=$_POST['fecha'];
		$empleado=$_POST['empleado'];
		$num_tel=$_POST['num_tel'];
		$tarjeta=$_POST['tarjeta'];
		$total=$_POST['total'];
		$carro=$_POST['carro'];
		$id=(int)$_GET['id'];

		if(!empty($num_venta) && !empty($fecha) && !empty($empleado) && !empty($num_tel) && !empty($tarjeta) && !empty($total)&& !empty($carro) ){
			
				$consulta_update=$con->prepare(' UPDATE crud_venta SET  
					num_venta=:num_venta,
					fecha=:fecha,
					empleado=:empleado,
					num_tel=:num_tel,
					tarjeta=:tarjeta,
					total=:total,
					carro=:carro
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':num_venta' =>$num_venta,
					':fecha' =>$fecha,
					':empleado' =>$empleado,
					':num_tel' =>$num_tel,
					':tarjeta' =>$tarjeta,
					':total' =>$total,
					':carro' =>$carro,
					':id' =>$id
				));
				header('Location: venta.php');
			}
		else{
			echo "<script> alert('Asegurate de llenar todos los campos correctamente');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar registro de venta</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2></h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="num_venta" value="<?php if($resultado) echo $resultado['num_venta']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="fecha" value="<?php if($resultado) echo $resultado['fecha']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="empleado" value="<?php if($resultado) echo $resultado['empleado']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="num_tel" value="<?php if($resultado) echo $resultado['num_tel']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="tarjeta" value="<?php if($resultado) echo $resultado['tarjeta']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="total" value="<?php if($resultado) echo $resultado['total']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="carro" value="<?php if($resultado) echo $resultado['carro']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="venta.php" class="btn btn__danger">Cancelar</a>
				
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos modificados correctamente!')">
			</div>
		</form>
	</div>
</body>
</html>
