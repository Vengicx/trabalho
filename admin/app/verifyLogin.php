<?php
	/*session_cache_expire(5);
	session_start();
	//verificar se o usuário esta logado
	if (!isset($_SESSION["sistema"]["id"])) {

		header("Location: ../index.php");
		
	}*/

	if($_POST){
		/* area de pegar dados do index.php */
		if (isset ($_POST["login"])){
			$login = trim ($_POST["login"]);
		}

		
		if (isset ($_POST["senha"])){
			$senha = trim ($_POST["senha"]);
			// $senha = password_hash ($senha, PASSWORD_DEFAULT);
		}
		/* fim da area do index.php */
		/* area de validacao no banco de dados */

		if(empty($_POST["senha"])){
			echo "<script>alert('Digite sua senha');history.back;</script>";
			exit;
		}elseif(empty($_POST["login"])){
			echo "<script>alert('Digite sua senha');history.back;</script>";
			exit;
		}else{
			include "conecta.php";
			$sql = "select * from usuario";
			$consulta->prepare($sql);

			if($consulta->execute()){
				$_SESSION["sistema"]["id"];
			}else{
				
			}
		}


	}else{		//fim do if($_POST)
		header("Location: ../index.php");
	}

?>