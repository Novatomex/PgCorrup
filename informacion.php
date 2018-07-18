<!DOCTYPE html>
<html>
<?php 
include('fun/contador.php');

    ContadorV("4");
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
	
</head>


<body >
	<div id="menu">
		<!--- Divicion menu -->
		
	</div>
	<div class="uk-text-center" uk-grid >
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion izquierda -->

        </div>
    </div>
    <div class="uk-width-expand@m" >
        <div class="uk-card uk-card-default uk-card-body" id="Contenido">
        	<!--- Divicion Contenido-->
            <table border="0" style="width: 100%" >
                <tr>
                    
                    <td rowspan="3" style="width: 20%">
                        <div class="uk-width-auto@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                <li><a href="#">Mapa de denuncia</a></li>
                                <li><a href="#">Organizaciones que me protegen</a></li>
                                <li><a href="#">Encuestas ciudadanas</a></li>
                                <li><a href="#">¿Fui victima de corrupción?</a></li>
                            </ul>
                        </div>
                    </td>
                    <td rowspan="3">
                        <ul id="component-tab-left" class="uk-switcher">
                            <li>
                                <h2>Mapa de denuncia</h2>
                                <hr>
                                <p>
                                    Te ayudamos a encontrar la ubicación de los lugares donde puedes realizar tu denuncia. 
                                </p>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30101.4632479108!2d-99.168979!3d19.426102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x876dc926a2ccd24c!2sDIRECCION+GENERAL+DE+ASUNTOS+INTERNOS!5e0!3m2!1ses-419!2smx!4v1531701121255" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> 
                            </li>
                            <li>
                                <h2>Organizaciones que me protegen</h2>
                                <hr>
                                
                                <ul uk-accordion>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Fiscalía Anticorrupción</a>
                                        <div class="uk-accordion-content">
                                            <p>La Fiscalía Anticorrupción es una de las fiscalías especiales dentro del Ministerio Fiscal, que tiene encomendada la investigación y el conocimiento de los procesos de especial trascendencia relativos a los delitos económicos u otros cometidos por funcionarios públicos en el ejercicio de sus cargos y relacionados con el fenómeno de la corrupción. También asume la investigación de los delitos económicos cometidos por grupos organizados, salvo que sean competencia específica de la Fiscalía Antidroga o de la Fiscalía de la Audiencia Nacional.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#">Sistema Nacional Anticorrupción</a>
                                        <div class="uk-accordion-content">
                                            <p>El Sistema Nacional Anticorrupción (SNA) es una instancia de coordinación entre distintas autoridades federales y locales que busca combatir eficazmente a la corrupción</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Item 3</a>
                                        <div class="uk-accordion-content">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                        </div>
                                    </li>
                                </ul>

                                
                            </li>
                            <li>
                                <h2>Encuestas ciudadanas</h2>
                                <hr>
                                <iframe style="width: 100%; height: 4700px;" src="https://docs.google.com/forms/d/e/1FAIpQLSfY5Bb7JwpmLtZKz34jx23I4_1PRebS0iEx9yr5a1biC7mPEQ/viewform">
                                    
                                </iframe>                            </li>
                            <li>
                                <h2> Nuestro equipo </h2>
                                <hr>
                                
                                <ul uk-accordion>
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#">Primer paso</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Segundo paso</a>
                                        <div class="uk-accordion-content">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Tercer paso</a>
                                        <div class="uk-accordion-content">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    
                </tr>

                </table>

        </div>
    </div>
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 
            
            echo MostrarVisitas("4");
            ?>
        </div>
    </div>
</div>
<div  uk-grid>
    <div class="uk-width-expand@m uk-background-secondary" id="pie">
        
    </div>
</div>
</body>
</html>