<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM crud_autosvendidos WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: autosvendidos.php');
	}


	if(isset($_POST['guardar'])){
		$carro=$_POST['carro'];
		$ano=$_POST['ano'];
		$modelo=$_POST['modelo'];
		$color=$_POST['color'];
		$precio=$_POST['precio'];
		$detalles=$_POST['detalles'];
		$fecha=$_POST['fecha'];
		$id=(int)$_GET['id'];

		if(!empty($carro) && !empty($ano) && !empty($modelo) && !empty($color) && !empty($precio) && !empty($detalles)&& !empty($fecha) ){
			
				$consulta_update=$con->prepare(' UPDATE crud_autosvendidos SET  
					carro=:carro,
					ano=:ano,
					modelo=:modelo,
					color=:color,
					precio=:precio,
					detalles=:detalles,
					fecha=:fecha
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':carro' =>$carro,
					':ano' =>$ano,
					':modelo' =>$modelo,
					':color' =>$color,
					':precio' =>$precio,
					':detalles' =>$detalles,
					':fecha' =>$fecha,
					':id' =>$id
				));
				header('Location: autosvendidos.php');
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
	<title>Editar auto vendido</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2></h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="carro" value="<?php if($resultado) echo $resultado['carro']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="ano" value="<?php if($resultado) echo $resultado['ano']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="modelo" value="<?php if($resultado) echo $resultado['modelo']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="color" value="<?php if($resultado) echo $resultado['color']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" value="<?php if($resultado) echo $resultado['precio']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="detalles" value="<?php if($resultado) echo $resultado['detalles']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="fecha" value="<?php if($resultado) echo $resultado['fecha']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="autosvendidos.php" class="btn btn__danger">Cancelar</a>
				
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos modificados correctamente!')">
			</div>
		</form>
	</div>
</body>
</html>
