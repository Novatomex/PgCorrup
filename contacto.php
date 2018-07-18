<!DOCTYPE html>
<html>
<?php 
include('fun/contador.php');

    ContadorV("7");
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


<body>
    <div id="encabezado">
    </div>
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
            <h3 class="uk-card-title">Si tienes alguna duda, contáctanos</h3>
            <p>¡Gracias!</p>
            <div class="uk-card uk-card-default uk-card-body uk-width-3-4 uk-align-center">
                <div class="uk-margin">
                    <textarea class="uk-textarea"  rows="5" placeholder="Dejar comentario"></textarea>
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nombre (opcional)">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Apellido (opcional)">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="number" placeholder="celular (opcional)">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Correo electronico">
                </div>

                <button class="uk-button uk-button-default">Enviar comentarios</button>


            </div>

        </div>
    </div>
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body uk-padding-remove-vertical">
            <!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 

            echo MostrarVisitas("7");
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