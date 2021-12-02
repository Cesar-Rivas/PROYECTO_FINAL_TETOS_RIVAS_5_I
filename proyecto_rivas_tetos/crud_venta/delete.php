<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM crud_venta WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: venta.php');
	}else{
		header('Location: venta.php');
	}
 ?>