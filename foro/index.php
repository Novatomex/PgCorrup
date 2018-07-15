<?php
require('configuracion.php');
require('funciones.php');
include('header.html');
/* Pedimos todos los temas iniciales (identificador==0)
* y los ordenamos por ult_respuesta */
$sql = "SELECT id, autor, titulo, fecha, respuestas, ult_respuesta ";
$sql.= "FROM foro WHERE identificador=0 ORDER BY ult_respuesta DESC";
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
{
	// Leemos el contenido de la plantilla de temas
	$template = implode("", file("temas.html"));
	include('titulos.html'); ?>
	<table width="90%" border="1" align="center" cellpadding="2" cellspacing="2" >

	<?php
	while($row = mysqli_fetch_assoc($rs))
	{
		mostrarTemplate($template, $row);
	}
	?>

	</table>
	<?php
}
include('footer.html');
?>

