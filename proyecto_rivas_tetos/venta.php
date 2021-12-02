<?php include("header.php") ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Confirmar compra</h1>
			</div>

			<div class="articulo">
				<article>
					<h1> Por favor complete el siguiente formulario: <br><br><br></h1>
						
					<form action="#" method="post">
                        <p>Nombre completo <input type="text" name="nombre" size="20"/></p><br>
                        <p>Edad <input type="text" name="dom" size="20"/></p><br>
						<p>Número de tarjeta de crédito <input type="text" name="credito" size="20"/></p><br>
						<p>Fecha de expiración <input type="date" name="fech" size="20"/></p><br>
						<p>Número de télefono fijo <input type="text" name="no" size="20"/></p><br>
						<p>Número de télefono celular <input type="text" name="dom" size="20"/></p><br>
						<p>Domicilio <input type="text" name="dom" size="20"/></p><br>
						<p><input type="reset" name="reset" value="Enviar"></p>
                        </form>
				    
				</article>
			</div>

			<?php include("lado.php") ?>
		</div>
	</section>
	
    <?php include("pies.php") ?>
</body>
</html>