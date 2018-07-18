
<!DOCTYPE html>
<html>
<?php 
include('fun/contador.php');

    ContadorV("1");
?>
<head>

	<title>Pagina Prueba</title>
    
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <link rel="stylesheet" href="../css/ps.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- UIkit JS -->
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
    <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/readrss.js"></script>
    
	
</head>


<body >
    <div class="loader"></div>
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
    <div class="uk-width-expand@m" >
        <div class="uk-card uk-card-default uk-card-body" id="Contenido">
        	<!--- Divicion Contenido-->
            <h3 class="uk-card-title">¿QUE ES LO QUE HACEMOS?</h3>
            <hr>
            <p class="uk-dropcap">La página web a desarrollar estará orientada a población que haya sido víctima de petición de soborno o extorsión por parte de un agente de la policía, y que tenga intención de denunciar o informarse sobre las formas de evitar extorsiones y sobornos; así como que tenga interés en compartir sus experiencias en actos de corrupción y denuncias de esta. Se espera que los usuarios compartan los documentos y herramientas de difusión vía redes sociales, y colaboren en los mecanismos de participación..</p>

            <hr class="uk-divider-icon">

            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: true">

                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../img/1.jpg);">
                    </li>
                    <li>
                       <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../img/3.jpg);">
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>

             <hr class="uk-divider-icon">

             <iframe width="560" height="315" src="https://www.youtube.com/embed/btAG0RVdVDw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



        </div>
    </div>
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 

            echo MostrarVisitas("1");
            ?>
        </div>
        <div class="uk-card uk-card-default uk-card-body">
            <hr>
            <!--- Divicion derecha -->
            <h4>Videos</h4>
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