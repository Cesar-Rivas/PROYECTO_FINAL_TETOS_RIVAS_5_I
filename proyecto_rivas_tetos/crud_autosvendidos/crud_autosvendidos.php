<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM crud_autosvendidos ORDER BY id');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>

	<style>
		

	a{
    text-decoration: none;
		}
	.contenedor{
    width: 95%;
    max-width: 1000px;
    margin: 30px auto;
    overflow: hidden;

	}	


	.barra__buscador{
    width: 100%;
    margin-top: 50px;
    margin-bottom: 10px;
	}

	.formulario{
    display: flex;
    width: 90%;
	}

	form .input__text{
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #848688;
    display: block;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 10px 15px;
    max-width: 30%;
    margin-right: 10px;
    outline: medium none;
	}


	form .input__text:focus{
    border: 1px solid #1b743c;
		}
	form .form-group{
    display: flex;
    width: 100%;
    flex-wrap: nowrap;
    justify-content: space-between;
	}

	form .form-group .input__text{
    max-width: 45% !important;
	}


	form .btn{
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #fff;
    display: block;
    font-size: 14px;
    background: rgb(3, 113, 163);
    margin-bottom: 15px;
    padding: 10px 20px;
    margin-right: 10px;
    outline: medium none;
    cursor: pointer;
	}
	.btn__nuevo{
    float: right;
    background: #1b743c !important;
	}

	.btn__group{
    float: left;
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
	}
	.btn__primary{
    background: rgb(3, 113, 163);
	}
	.btn__danger{
    background: #8a0505 !important;
    float: left !important;
	}


	/* table */
	table{
    width: 100%;
    border-collapse: collapse;
	}

	table .head{
    background: rgba(0, 0, 0, .5);
	}
	table .head td{
    color: #fff;
    font-family: 'Arial',sans-serif;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
	}

	table tr td{
    border:1px solid black;
    padding: 7px;
    font-size: 14px;
    color: white;
	}
	table tr {
		background-color: darkgray;
	}

	.btn__update{
    display: inline-block;
    font-size: 14px;
    background: #1b743c;
    color: #fff;
    border-radius: 5px;
    padding: 5px 10px;
	}

	.btn__delete{
    display: inline-block;
    font-size: 14px;
    background: #8a0505;
    color: #fff;
    border-radius: 5px;
    padding: 5px 10px;
	}


	</style>
</head>
<body>

	<div class="contenedor">
		
</br></br>

		<table>
			<tr class="head">
				<td>Id</td>
				<td>Compañía</td>
				<td>Año</td>
				<td>Modelo</td>
				<td>Color</td>
				<td>Precio</td>
				<td>Detalles</td>
				<td>Fecha de venta</td>
				<td colspan="2"></td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['carro']; ?></td>
					<td><?php echo $fila['ano']; ?></td>
					<td><?php echo $fila['modelo']; ?></td>
					<td><?php echo $fila['color']; ?></td>
					<td><?php echo $fila['precio']; ?></td>
					<td><?php echo $fila['detalles']; ?></td>
					<td><?php echo $fila['fecha']; ?></td>
					<td><a href="editar_autosvendidos.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar registro</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete" onclick="alert('Registro eliminado correctamente')">Eliminar registro</a></td>
					
				</tr>
			<?php endforeach ?>

		</table>
		</br></br><a href="registro_autosvendidos.php" class="btn__update">Crear nuevo registro</a>
	</div>
</body>
</html>