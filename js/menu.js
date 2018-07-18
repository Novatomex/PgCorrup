$(document).ready(function() {
			//Carga la pagina principal
			$("#encabezado").load('/../cb.html');
			$("#menu").load('/../menu.html');
			$("#pie").load('/../pie.html');

			UIkit.notification({
			    message: '<iframe style="width: 100%;" src="../encuesta.php"> </iframe>',
			    status: 'primary',
			    pos: 'top-right',
			    timeout: 10000
			}); 
			

		});


$(window).load(function() {
    $(".loader").fadeOut("slow");
});

