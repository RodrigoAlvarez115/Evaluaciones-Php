<?php session_start(); ?>
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
		<h2>Consultas</h2>
		<?php
		function captcha() {
			$pattern = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$clave = '';

			for($i = 0; $i < 6; $i++) {
				$clave .= $pattern[rand(0,60)];
			}

			return $clave;
		}

		$_SESSION['captcha'] = captcha();
		?>
		<form action="cargar.php" method="POST">
			<input type="text" name="nombre" placeholder="Ingrese su nombre" maxlength="30" required>
			<input type="text" name="apellido" placeholder="Ingrese su apellido" maxlength="50" required>
			<input type="email" name="email" placeholder="Ingrese su correo electrónico" maxlength="50" required>
			<img class="captcha" src="captcha.php" alt="">
			<input type="text" name="captcha" maxlength="6" placeholder="captcha" required>
			<textarea name="consulta" cols="30" rows="5" maxlength="255"></textarea>
			<input type="submit" class="submit">
		</form>
		<?php
		if(isset($_GET['ok'])) {
			?> 
			<p>Su consulta fue cargada!</p>
		<?php
		} if(isset($_GET['error_carga_datos'])) {
			?>
			<p>Por favor ingrese el captcha nuevamente.</p>
		<?php	
		}
		?>
	</section>
	<aside>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>