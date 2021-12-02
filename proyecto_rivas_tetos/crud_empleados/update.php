<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM crud_empleados WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: empleados.php');
	}


	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$sexo=$_POST['sexo'];
		$edad=$_POST['edad'];
		$sueldo=$_POST['sueldo'];
		$puesto=$_POST['puesto'];
		$antiguedad=$_POST['antiguedad'];
		$num_tel=$_POST['num_tel'];
		$id=(int)$_GET['id'];

		if(!empty($nombre) && !empty($sexo) && !empty($edad) && !empty($sueldo) && !empty($puesto) && !empty($antiguedad)&& !empty($num_tel) ){
			
				$consulta_update=$con->prepare(' UPDATE crud_empleados SET  
					nombre=:nombre,
					sexo=:sexo,
					edad=:edad,
					sueldo=:sueldo,
					puesto=:puesto,
					antiguedad=:antiguedad,
					num_tel=:num_tel
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':sexo' =>$sexo,
					':edad' =>$edad,
					':sueldo' =>$sueldo,
					':puesto' =>$puesto,
					':antiguedad' =>$antiguedad,
					':num_tel' =>$num_tel,
					':id' =>$id
				));
				header('Location: empleados.php');
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
	<title>Editar empleado</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2></h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="sexo" value="<?php if($resultado) echo $resultado['sexo']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="edad" value="<?php if($resultado) echo $resultado['edad']; ?>" class="input__text">
				</div>
			<div class="form-group">
				<input type="text" name="sueldo" value="<?php if($resultado) echo $resultado['sueldo']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="puesto" value="<?php if($resultado) echo $resultado['puesto']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="antiguedad" value="<?php if($resultado) echo $resultado['antiguedad']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="num_tel" value="<?php if($resultado) echo $resultado['num_tel']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="empleados.php" class="btn btn__danger">Cancelar</a>
				
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary" onclick="alert('Datos modificados correctamente!')">
			</div>
		</form>
	</div>
</body>
</html>
