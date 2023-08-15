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
			<h2>Registro</h2>
			<form action="cargarusuario.php" method="POST">
				<input type="email" name="email" maxlength="50" placeholder="correo" required>
				<input type="password" name="clave" placeholder="contraseña" minlength="4" maxlength="10">
				<input type="submit" class="submit">
			</form>
			<?php
			if (isset($_GET['okey'])) {
			?>
				<p>Usuario registrado con éxito!</p>
			<?php }
			if (isset($_GET['usuario_registrado'])) {
			?>
				<p>Email ya registrado.</p>
			<?php } ?>

		</section>
		<aside>
			<h2 class="h2_centrado">Ingreso</h2>
			<form action="verificarusuario.php" method="POST">
				<input type="email" name="email" maxlength="50" placeholder="correo" required>
				<input type="password" name="clave" placeholder="contraseña" minlength="4" maxlength="10">
				<input type="submit" class="submit">
			</form>
			<?php if (isset($_GET['ingreso_correcto'])) { ?>
				<p class="h2_centrado">INGRESANDO...</p>
			<?php }
			if (isset($_GET['contraseña_incorrecta'])) {
			?>
				<p class="h2_centrado">Su contraseña es incorrecta.</p>
			<?php }
			if (isset($_GET['usuario_no_registrado'])) {  ?>
				<p class="h2_centrado">Usuario no registrado.</p>
			<?php } ?>
		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>