<!DOCTYPE html>
<html>
<?php 
include('fun/contador.php');

    ContadorV("2");
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
	<script src="../js/menu.js"></script>
	<script src="../js/readrss.js"></script>

</head>


<body >
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
        	  <table border="0" style="width: 100%" >
        	  	<tr>
        	  		<!--
        	  		<td style="width: 30%">
        	  			<button class="uk-button uk-button-default"  style="width: 80%">Quienes somos?</button>
        	  		</td>
        	  		<th>Titulo</th> -->
        	  		<td rowspan="3" style="width: 20%">
        	  			<div class="uk-width-auto@m">
			                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
			                    <li><a href="#">¿Quienes Somos?</a></li>
			                    <li><a href="#">Misión</a></li>
			                    <li><a href="#">Visión</a></li>
			                    <li><a href="#">Nuestro equipo</a></li>
			                </ul>
			            </div>
        	  		</td>
        	  		<td rowspan="3">
        	  			<ul id="component-tab-left" class="uk-switcher">
		                    <li>
		                    	<h2> ¿Quienes Somos?</h2>
		                    	<hr>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		                    	</p>
		                    	
		                    </li>
		                    <li>
		                    	<h2> Misión </h2>
		                    	<hr>
		                    	<p>
		                    		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                    	</p>
		                    	
		                    </li>
		                    <li>
		                    	<h2>Visión</h2>
		                    	<hr>
		                    	<p>
		                    		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.
		                    	</p>
		                    </li>
		                    <li>
		                    	<h2> Nuestro equipo </h2>
		                    	<hr>
		                    	<p> Somos talentum</p>
		                    </li>
		                </ul>
        	  		</td>
        	  		
        	  	</tr>

        	  	</table>
			        	
						
		</div>
    </div>
    <div class="uk-width-1-5">
         <div class="uk-card uk-card-default uk-card-body uk-padding-remove-vertical">
        	<!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 

            echo MostrarVisitas("2");
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