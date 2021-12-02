<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM crud_autos WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: autos.php');
	}


	if(isset($_POST['guardar'])){
		$marca=$_POST['marca'];
		$modelo=$_POST['modelo'];
		$ano=$_POST['ano'];
		$color=$_POST['color'];
		$num_serie=$_POST['num_serie'];
		$placas=$_POST['placas'];
		$precio=$_POST['precio'];
		$id=(int)$_GET['id'];

		if(!empty($marca) && !empty($modelo) && !empty($ano) && !empty($color) && !empty($num_serie) && !empty($placas)&& !empty($precio) ){
			
				$consulta_update=$con->prepare(' UPDATE crud_autos SET  
					marca=:marca,
					modelo=:modelo,
					ano=:ano,
					color=:color,
					num_serie=:num_serie,
					placas=:placas,
					precio=:precio
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':marca' =>$marca,
					':modelo' =>$modelo,
					':ano' =>$ano,
					':color' =>$color,
					':num_serie' =>$num_serie,
					':placas' =>$placas,
					':precio' =>$precio,
					':id' =>$id
				));
				header('Location: autos.php');
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
	<title>Editar auto</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2></h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="marca" value="<?php if($resultado) echo $resultado['marca']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="modelo" value="<?php if($resultado) echo $resultado['modelo']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="ano" value="<?php if($resultado) echo $resultado['ano']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="color" value="<?php if($resultado) echo $resultado['color']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="num_serie" value="<?php if($resultado) echo $resultado['num_serie']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="placas" value="<?php if($resultado) echo $resultado['placas']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" value="<?php if($resultado) echo $resultado['precio']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="autos.php" class="btn btn__danger">Cancelar</a>
				
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos modificados correctamente!')">
			</div>
		</form>
	</div>
</body>
</html>
