<!DOCTYPE html>
<html>
<?php 
include('../fun/contador.php');

    ContadorV("3");
?>
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
	<div id="encabezado"></div>
	<div id="menu">
		<!--- Divicion menu -->
	</div>
	<div class="uk-text-center" uk-grid >
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body" >
        	<!--- Divicion izquierda -->
            <div id="noticias"></div>

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

					<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2" class="uk-table-striped">

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
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body uk-padding-remove-vertical">
        	<!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 

            echo MostrarVisitas("3");
            ?>
            <br>
        </div>
        <div class="uk-card uk-card-default uk-card-body uk-padding-remove-vertical">
            <hr>
            <!--- Divicion derecha -->
            <h4 class="h3izde">Videos</h4>
            <hr>
            <br>
            <iframe style="width: 100%; "  src="https://www.youtube.com/embed/WlDsLMEgsE4?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <hr>
            <iframe style="width: 100%; " src="https://www.youtube.com/embed/j7-n676Qo2o?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <hr>
            <iframe style="width: 100%;" src="https://www.youtube.com/embed/0jL2cRs50ZY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <hr>
            <iframe style="width: 100%;" src="https://www.youtube.com/embed/3r0mNpOyMS0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
    </div>
</div>
<div  uk-grid>
    <div class="uk-width-expand@m uk-background-secondary" id="pie">
        
    </div>
</div>
</body>
</html>