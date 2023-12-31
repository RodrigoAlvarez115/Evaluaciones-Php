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
		<h2>Comentarios</h2>
			<?php
			if(isset($_GET['ok'])) {
				$leer = fopen('comentario.txt', 'a+');
				fpassthru($leer);
				fclose($leer);
			}
			?>	
	</section>
	<aside>
		<h2 class="h2_centrado">Consultas</h2>
    <form action="comentarios.php" method="POST">
			<input type="text" name="usuario" placeholder="Ingrese su nombre y apellido" maxlength="50" required>
			<input type="email" name="email" placeholder="Ingrese su correo electrónico" maxlength="30" required>
			<textarea name="comentario" cols="30" rows="5" maxlength="255"></textarea>
			<input type="submit" class="submit">
		</form>
		<?php 
		if(isset($_GET['ok'])){
			?>
			<p class="h2_centrado">Enviado!</p>
			<?php
		}
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>