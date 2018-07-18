<?php 
	
	//$pagina = "1"; // cada pagina tendra su identificador
	function ContadorV($pagina)
	{
		if(!isset($_COOKIE[$pagina])){
			require($_SERVER['DOCUMENT_ROOT'].'/fun/conexion.php');
		//No se cuenta esta visita
			//Primera visita
			//$pagina = "1"; // Index Mas tarde configurar numero por pagina
			setcookie($pagina,$pagina,time()+365*24*60*60);
			//se cuenta
			$SQL = "UPDATE visita SET visitas = visitas + 1 WHERE pagina_cookie = ".$pagina;
			mysqli_query($con,$SQL) ;
		}
	}

	function MostrarVisitas($pagina){
		require($_SERVER['DOCUMENT_ROOT'].'/fun/conexion.php');
		//echo $pagina;
		$SQL = "SELECT visitas FROM visita WHERE pagina_cookie = " .$pagina;
		//echo $SQL;
		$Val = mysqli_query($con,$SQL);
		$Val = mysqli_fetch_array($Val);

		return $Val[0];
	}
	
	
?>