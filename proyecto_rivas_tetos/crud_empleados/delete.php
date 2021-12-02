<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM crud_empleados WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: empleados.php');
	}else{
		header('Location: empleados.php');
	}
 ?>