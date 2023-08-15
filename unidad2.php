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
		<h2>Eventos</h2>
		<?php
		if(isset($_SESSION['fechas'])) {
			if($_SESSION['fechas']['fecha_usuario_calculo'] > $_SESSION['fechas']['fecha_actual_calculo']) {
				
			?>
			<h3>Faltan <?php echo $_SESSION['fechas']['fecha_resultado']?> días para su turno .</h3>
			<h3>Hoy es: <?php echo $_SESSION['fechas']["fecha_actual"] ?>.</h3>
			<h3>Su turno es el: <?php echo $_SESSION['fechas']["fecha_usuario"] ?>.</h3>
			<p><a class="submit_link"  href="salir.php">Realizar otra consulta</a></p>
		<?php
		} elseif($_SESSION['fechas']['fecha_usuario_calculo']  < $_SESSION['fechas']['fecha_actual_calculo']) {
			?>
			<h3>Su turno expiró! por favor saque uno nuevo.</h3>
			<p><a class="submit_link"  href="salir.php">Realizar otra consulta</a></p>
		<?php
		} else {
			?>
			<h3>Su turno es el dia de hoy, por favor revise el horario del mismo.</h3>
			<p><a class="submit_link" href="salir.php">Realizar otra consulta</a></p>
		<?php
		}
	}
		?>
		
	</section>
	<aside>
    <form action="calculo_fecha.php" method="POST">
		<h2 class="h2_centrado">Consulte sobre su turno</h2>
			<input type="number" name="day" id="day" min="1" max="31" placeholder="Dia" required>
			<input type="number" name="month" id="month" min="1" max="12" placeholder="Mes" required>
			<input type="number" name="year" id="year" min="2023" placeholder="Año" required>
			<input  class="submit" type="submit">
		</form>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>