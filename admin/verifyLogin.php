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
			echo "<script>alert('Digite seu login');history.back;</script>";
			exit;
		}else{
			include "app/conecta.php";
			$sql = "(select * from usuario where login = ? limit 1)";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $login);
			$consulta->execute();
			$dados = $consulta->fetch(PDO::FETCH_OBJ);

            if (empty ($dados->id)){
                echo "<script>alert('Usuário não encontrado');history.back();</script>";
            }else if($dados->ativo !="Sim"){
                echo "<script>alert('Este usuário não está ativo.');history.back();</script>";
            }else if (!password_verify($senha, $dados->senha)){
                echo "<script>alert('Senha incorreta.');history.back();</script>";
            }else{
                $_SESSION["sistema"] = array("id"=>$dados->id, "login"=>$dados->login, "nome"=>$dados->nome);

                header("Location: home.php");
            }
        }

	}else{		//fim do if($_POST)
		header("Location: index.php");
	}

?>