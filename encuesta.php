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
            <table border="1" style="width:100%">
              <tr> 
                <td colspan = "3">pregunta 1</td> 
              </tr>
              <tr>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/feliz.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/neutral.png" width="30" height="30"></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" > <img src="../img/triste.png" width="30" height="30"></td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%">pregunta 2</td>
              </tr>
              <tr>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" ></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" ></td>
                <td style ="width:35%"><input class="uk-radio" type="radio" name="radio2" ></td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%">Dejanos un comentario:</td>
              </tr>

              <tr>
                <td colspan = "3" style = "width:100%" <textarea class="uk-textarea"  rows="5" placeholder="Dejar comentario">  </td>
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