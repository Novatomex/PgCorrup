$(document).ready(function() {
			//Carga la pagina principal
			$("#encabezado").load('/../cb.html');
			$("#menu").load('/../menu.html');
			$("#pie").load('/../pie.html');

			UIkit.notification({
			    message: '<table border="0"><tr><th colspan="2"><span>¿Podrías responder la siguiente encuesta?</span></th></tr><tr><td width="50%"><button class="uk-button uk-button-primary uk-width-1-1" uk-toggle="target: #modal-close-default">Si</button></td><td width="50%"><button class="uk-button uk-button-danger uk-width-1-1">Después</button></td></tr> </table>',
			    status: 'primary',
			    pos: 'top-right',
			    timeout: 10000
			}); 
			

		});


$(window).load(function() {
    $(".loader").fadeOut("slow");
});

