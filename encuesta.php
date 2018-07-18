<!DOCTYPE html>
<html>
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
            <table border="0" style="width:100%;text-align: left;padding:29px">
              <tr> 
                <td colspan = "3">Queremos ser de gran ayuda para ti, por ello, te pedimos que respondas a esta pequeña encuesta:</td> 
              </tr>
               <tr>
                <td colspan = "3" rowspan="1" style = "width:100%"></td>
              </tr>
              <tr> 
                <td colspan = "3">1.- Con base a la visita de hoy, ¿Cómo calificaría su experencia total en el sitio?</td> 
              </tr>
              <tr>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/feliz.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/neutral.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/triste.png" width="30" height="30"></td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%">2.-¿Le resulto util la información proporcionada?</td>
              </tr>
              <tr>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/feliz.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/neutral.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/triste.png" width="30" height="30"></td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%">3.-¿Compartiria esta pagina a alguien más?</td>
              </tr>
              <tr>
                <td style ="width:35%" ><input class="uk-radio" type="radio" name="radio2" > Sí</td>
                <td style ="width:35%" ><input class="uk-radio" type="radio" name="radio2" >Tal vez</td>
                <td style ="width:35%" ><input class="uk-radio" type="radio" name="radio2" >No</td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%">Por favor, déjanos un comentario para mejorar nuestra pagina:</td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%" > <textarea class="uk-textarea" rows="5" placeholder="Dejar comentario"> </textarea> </td>
              </tr>

              <tr>
                <td style ="width:35%" ></td>
                <td style ="width:35%" ></td>
                <td style ="width:35%" ><button class="uk-button uk-button-default">Enviar</button></td>
              </tr>
            </table>


        </div>
    </div>
    <div class="uk-width-1-5@m">
        <div class="uk-card uk-card-default uk-card-body">
        	<!--- Divicion derecha -->
        </div>
    </div>
</div>

</body>
</html>