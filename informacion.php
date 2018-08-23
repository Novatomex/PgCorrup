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
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion izquierda -->
            <div id="noticias"></div>

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
                                <li><a href="#"><b> Directorio </b></a></li>
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
                            <li>
                                <h2> Directorio </h2>
                                <hr>
                                <h3>Conectactate con alguna de estas organizaciones y/o entidades.</h3>
                                <ul uk-accordion>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Dirección General de Asuntos Internos</a>
                                        <div class="uk-accordion-content">
                                            <p>Página oficial de la Secretaría de Seguridad Pública de la Ciudad de México.  Además de contener el reglamento de tránsito de la Ciudad de México, se puede denunciar cualquier tipo de actos de corrupción en la misma ciudad, ya sea por medio del formulario de denuncia que proporciona la página o por llamada telefónica. <br>
                                            <b> Pagina Web: </b><br>
                                            <a href="http://data.ssp.cdmx.gob.mx/dgip_denuncia.html"> http://data.ssp.cdmx.gob.mx/dgip_denuncia.html</a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel. 52 08 74 45 ó 52 08 98 98
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Secretaría de Seguridad y Protección Ciudadana de Chiapas</a>
                                        <div class="uk-accordion-content">
                                            <p>Página oficial de la División de la Secretaria de Seguridad y Protección Ciudadana de Chiapas, que investiga los incidentes y sospechas en que un servidor público del área de Seguridad ha tenido una conducta inapropiada o cometido un delito. En esta página podrás hacer la denuncia a través del formulario proporcionado en la misma, por correo o por cualquiera de sus otros medios digitales <br>
                                            <b> Pagina Web: </b><br>
                                            <a href="https://www.sspc.chiapas.gob.mx/unidad_de_asuntos_internos"> https://www.sspc.chiapas.gob.mx/unidad_de_asuntos_internos</a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                              Tel. 01 800 22 114 86 y 60 411 45
                                              <br>
                                              <b>E-mail</b>
                                              <br>
                                               aciudadana@sspc.chiapas.gob.mx <br>
                                               uai_chiapas@hotmail.com
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Sistema de Atención Mexiquense</a>
                                        <div class="uk-accordion-content">
                                            <p>Sistema encargado de denuncias sobre diversos ámbitos, ya sea corrupción en servidores públicos, programas sociales, conductas de acoso sexual u hostigamiento laboral. En esta página se pueden realizar este tipo de denuncias, presentar sugerencias o reconocimientos al buen servicio, y da la posibilidad de conocer el seguimiento de la misma desde el portal WEB <br>
                                            <b> Pagina Web: </b><br>
                                            <a href="https://www.secogem.gob.mx/SAM/sit_atn_mex.asp"> https://www.secogem.gob.mx/SAM/sit_atn_mex.asp</a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel. (01 800) 69 69 696
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Gobierno del Estado de Sonora</a>
                                        <div class="uk-accordion-content">
                                            <p>Portal que facilita denuncias ciudadanas en el Estado de Sonora, para actos de corrupción, quejas sobre servicio y reconocimientos a servidores públicos del estado. La página te da la opción de realizar la denuncia, queja o sugerencia a través de un formulario proporcionado, o por llamada telefónica<br>
                                            <b> Pagina Web: </b><br>
                                            <a href="http://decides.sonora.gob.mx/"> http://decides.sonora.gob.mx/</a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel. 01 800 46 63 786
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Portal Anticorrupción</a>
                                        <div class="uk-accordion-content">
                                            <p>Portal para la ciudad de México, especializado en actos de corrupción. Además de que da la opción de presentar la denuncia por medio del mismo, proporciona información sobre indicadores de corrupción, consejos y una guía práctica para educar a niños y jóvenes en la cultura de la anticorrupción<br>
                                            <b> Pagina Web: </b><br>
                                            <a href="http://www.anticorrupcion.cdmx.gob.mx/ "> http://www.anticorrupcion.cdmx.gob.mx/ </a>
                                            <br>
                                            <b>Correo</b>
                                            <br>
                                            cmartineze@cdmx.gob.mx
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Centro de Integración Ciudadana</a>
                                        <div class="uk-accordion-content">
                                            <p>Portal WEB del Centro de Integración Ciudadana que canaliza las denuncias de los ciudadanos en materia de servicios públicos. Ofrece asesoría Legal y Psicológica. <br>
                                            <b> Pagina Web: </b><br>
                                            <a href="http://www.cic.mx/ ">http://www.cic.mx/ </a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel. 01 800 838 8080
                                            <br>
                                            <b>Correo</b>
                                            <br>
                                            contacto@cic.mx
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Línea Directa Morelia</a>
                                        <div class="uk-accordion-content">
                                            <p>Página para denuncias sobre mal comportamiento de policías de tránsito en la ciudad de Morelia. También permite la denuncia de problemáticas como fallas en infrraestructura vial o peatonal por medio del portal WEB, la app para dispositivos móbiles o por llamada telefónica. En el mismo portal se puede dar el seguimiento a la denuncia.<br>
                                            <b> Pagina Web: </b><br>
                                            <a href="http://lineadirecta.morelia.gob.mx/ ">http://lineadirecta.morelia.gob.mx/ </a>
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel. 072 (443) 312 01 01
                                          
                                            </p>
                                        </div>
                                    </li>
                                     <li>
                                        <a class="uk-accordion-title" href="#">Dirección de Seguridad Pública y Tránsito del Estado de Michoacán</a>
                                        <div class="uk-accordion-content">
                                            <p>Secretaría ante la cual se puede acudir para denunciar cualquier tipo de acto de corrupción especializado en seguridad pública y de tránsito. También se puede realizar la denuncia por llamada telefónica<br>
                                            
                                            <br>
                                            <b>Telefonos</b>
                                            <br>
                                            Tel: 01 443 316 3646
                                          
                                            </p>
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
        <div class="uk-card uk-card-default uk-card-body uk-padding-remove-vertical">
            <!--- Divicion derecha -->
            <p> Visitantes:  </p>
            <?php 

            echo MostrarVisitas("4");
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