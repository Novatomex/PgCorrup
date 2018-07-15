

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
					require('funciones.php');
					$id = $_GET["id"];
					$citar = $_GET["citar"];
					$row = array("id" => $id);
					if($citar==1)
					{
						require('configuracion.php');
						$sql = "SELECT titulo, mensaje, identificador AS id FROM foro WHERE id='$id'";
						$rs = mysqli_query($con,$sql );
						if(mysqli_num_rows($rs)==1) $row = mysqli_fetch_assoc($rs);
						$row["titulo"] = "Re: ".$row["titulo"];
						$row["mensaje"] = "[citar]".$row["mensaje"]."[/citar]";
						if($row["id"]==0) $row["id"]=$id;
					}
					$template = implode("", file('formulario.html'));
					include('header.html');
					mostrarTemplate($template, $row);
					include('footer.html');
				?>
        	
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