<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2>Compras</h2>
			<?php
			include("recursos.php");

			$listar_productos = $productos->listar_productos();
			?>

			<table>
				<tr>
					<th>CODIGO</th>
					<th>PRODUCTO</th>
					<th>DESCRIPCION</th>
					<th>PRECIO</th>
					<th>ACCION</th>
				</tr>
				<?php for ($i = 0; $i < count($listar_productos); $i++) { ?>
					<tr>
						<td><?php echo $listar_productos[$i]['codigo']; ?></td>
						<td><?php echo $listar_productos[$i]['producto']; ?></td>
						<td><?php echo $listar_productos[$i]['descripcion']; ?></td>
						<td><?php echo $listar_productos[$i]['precio']; ?></td>
						<td><a class="submit_link" href="comprar.php?id=<?php echo $listar_productos[$i]['codigo']; ?>">COMPRAR</a></td>
					</tr>
				<?php	} ?>
			</table>
		</section>
		<aside>
			<h2 class="h2_centrado">Carrito</h2>

			<?php

			if ($_GET) {

				$listar_compras = $compra->listar_compra();

				for ($i = 0; $i < count($listar_compras); $i++) { ?>
					<h3> <?php echo $listar_compras[$i]['producto']; ?> </h3>
					<h4>Código: <?php echo $listar_compras[$i]['codigo']; ?> </h4>
					<p><strong>Descripción:</strong> <?php echo $listar_compras[$i]['descripcion']; ?> </p>
					<h4>Precio: <?php echo $listar_compras[$i]['precio']; ?> </h4>
					<a class="submit_link link_ciclos" href="eliminar.php?id=<?php echo $listar_compras[$i]['id_compra']; ?>">ELIMINAR</a>
				<?php }
			} else {
				?>
				<p class="h2_centrado">su carrito está vacío.</p>
			<?php	} ?>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>