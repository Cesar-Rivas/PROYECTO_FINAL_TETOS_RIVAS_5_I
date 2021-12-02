<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM crud_autos WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: autos.php');
	}else{
		header('Location: autos.php');
	}
 ?>