


<!DOCTYPE html>
<html>
<head>
	<title>Pagina Prueba</title>

	<link rel="stylesheet" href="../css/uikit.min.css" />
	<link rel="stylesheet" href="../css/ps.css" />
	<!-- UIkit JS -->
	<script src="../js/uikit.min.js"></script>
	<script src="../js/uikit-icons.min.js"></script>
	<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
	<script src="../js/menu.js"></script>
</head>


<body >
	<div class="loader"></div>
	<div id="menu">
		<!--- Divicion menu -->
		
	</div>
	<div class="uk-text-center" uk-grid >
    <div class="uk-width-1-5">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion izquierda -->

        </div>
    </div>
    <div class="uk-width-expand" >
        <div class="uk-card uk-card-default uk-card-body" id="Contenido">
        	<!--- Divicion Contenido-->
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
					//$template = implode("", file("temas.html"));
					include('titulos.html'); 
					?>

					<table width="90%" border="1" align="center" cellpadding="2" cellspacing="2" >

					<?php
					while($row = mysqli_fetch_assoc($rs))
					{
						//mostrarTemplate($template, $row);
						?>

							<tr> 
							    <td><a href="foro?id=<?php print $row['id'] ?>">
							      <?php print $row['titulo'] ?>
							      </a></td>
							    <td width="15%" align="center"><font size="-2">Por <b> 
							      <?php print $row['autor'] ?>
							      </b><br>
							      el 
							      <?php print $row['fecha'] ?>
							      </font></td>
							    <td width="15%" align="center"><font size="-2"> 
							      <?php print $row['respuestas'] ?>
							      </font></td>
							    <td width="15%" align="center"><font size="-2"> 
							      <?php print $row['ult_respuesta'] ?>
							      </font></td>
							  </tr>

						<?php
					}
					}

					?>
					</table>
        </div>
    </div>
    <div class="uk-width-1-5">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion derecha -->
        </div>
    </div>
</div>

</body>
</html>