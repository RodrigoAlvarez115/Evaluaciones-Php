
<?php
include("conexion_bd.php");
$consulta = mysqli_query($database,"SELECT unidad,fecha FROM clases");

while ($mostrar_unidad= mysqli_fetch_assoc($consulta)) {
?>

<div class="mostrar_unidad">
<h2><?php echo $mostrar_unidad['unidad']?></h2>
<p>fecha: <?php echo $mostrar_unidad['fecha']?></p>
</div>

<?php } ?>