<?php
	/*session_cache_expire(5);
	session_start();
	//verificar se o usuário esta logado
	if (!isset($_SESSION["sistema"]["id"])) {

		header("Location: index.php");
		
	}*/

	if($_POST){
		/* area de pegar dados do index.php */
		if (isset ($_POST["login"])){
			$login = trim ($_POST["login"]);
		}

		
		if (isset ($_POST["senha"])){
			$senha = trim ($_POST["senha"]);
		}
		/* fim da area do index.php */


		









	}else{		//fim do if($_POST)
		header("Location: ../index.php");
	}

?>