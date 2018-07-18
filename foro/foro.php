

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
    <div class="uk-width-1-5">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion izquierda -->
        	<div id="drss">
        		
        	</div>

        </div>
    </div>
    <div class="uk-width-expand" >
        <div class="uk-card uk-card-default uk-card-body" id="Contenido">
        	<!--- Divicion Contenido-->
        	
        	<?php
					require('configuracion.php');
					require('funciones.php');
					$id = $_GET["id"];
					if(empty($id)) Header("Location: index.php");

					$sql = "SELECT id, autor, titulo, mensaje, ";
					$sql.= "DATE_FORMAT(fecha, '%d/%m/%Y %H:%i:%s') as enviado FROM foro ";
					$sql.= "WHERE id='$id' OR identificador='$id' ORDER BY fecha ASC";
					$rs = mysqli_query($con,$sql );
					include('header.html');
					if(mysqli_num_rows($rs)>0)
					{
						//include('titulos_post.html');
						?>
						<table width="90%" border="0" align="center">
							<?php
						$template = implode("", file('post.html'));
						while($row = mysqli_fetch_assoc($rs))
						{
							//$color=($color==""?"#5b69a6":"");
							//$row["color"] = $color;
							//manipulamos el mensaje
							//$row["mensaje"] = nl2br($row["mensaje"]);
							//$row["mensaje"] = parsearTags($row["mensaje"]);
							//mostrarTemplate($template, $row);?>

							<tr>
								<td class="uk-background-muted"><h3><?php echo $row['titulo']; ?></h3> </td>
							</tr>
							<tr style="text-align: left;">
								<td>
									<article class="uk-comment uk-comment-primary">
									    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
									        <div class="uk-width-auto">
									            <img class="uk-comment-avatar" src="../img/avatar.png" width="60" height="60" alt="">
									        </div>
									        <div class="uk-width-expand">
									            <h4 class="uk-comment-title uk-margin-remove"> <a class="uk-link-reset" href="#"><?php echo $row['autor'];?></a></h4>
									            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
									                <li><?php echo $row['enviado'];?></li>
									                <li><a href="respuesta.php?id= <?php echo $row['id']; ?>&citar=1">CITAR</a> </li>
									            </ul>
									        </div>
									    </header>	
									    <div class="uk-comment-body">
									        <p><?php echo $row['mensaje']; ?></p>
									    </div>
									</article>
								</td>
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
        	<p> Visitantes:  </p>
            <?php 
            
            echo MostrarVisitas("3");
            ?>
        </div>
    </div>
</div>

</body>
</html>