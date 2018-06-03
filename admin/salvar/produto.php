<?php
	if (!isset($pagina)){
		echo "Acesso Negado!";
		exit();
	}

	$id = $nome = $descricao = $foto = "";

	if(isset ($_POST["nome"]))
        $nome = trim ($_POST["nome"]);

    if(isset ($_POST["descricao"]))
        $descricao= trim ($_POST["descricao"]);

    if(isset ($_FILES["foto"]))
        $foto = $_FILES["foto"]["name"];

    if (empty ($nome)){
    	echo "<script>alert('Preencha o nome.');history.back();</script>";
    	exit();
    }elseif(empty ($descricao)){
		echo "<script>alert('Preencha a descrição.');history.back();</script>";
    	exit();
    }elseif(empty ($foto)){
    	echo "<script>alert('Escolha a foto.');history.back();</script>";
    	exit();
    }else{
    	include "app/conecta.php";

    	//iniciar transaçao
    	$pdo->beginTransaction();

    	//se o id estiver vazio - INSERT
        
    	if ( empty ($id) ){
    		$sql = "insert into produto (id,nome,descricao,foto) values (NULL, ?, ?, ?)";
    		$consulta = $pdo->prepare($sql);
    		$consulta->bindParam(1, $nome);
            $consulta->bindParam(2, $descricao);
            
            $consulta->bindParam(3, $foto);
            
    	}else{
    		$sql = "update produto set nome = ?, descricao = ?, foto = ?, where = ? limit 1";
    		$consulta = $pdo->prepare($sql);
    		$consulta->bindParam(1, $nome);
            $consulta->bindParam(2, $descricao);
            $consulta->bindParam(3, $foto);
    		$consulta->bindParam(4, $id);
    	}

    	if($consulta->execute()){
    		if(!empty ( $_FILES["foto"]["name"])){
    			if (copy ($_FILES["foto"]["tmp_name"], "./fotos/".$_FILES["foto"]["name"])){
    				//mudar o nome e renomear
    			} else{
    				echo "<script>alert('Erro ao copiar arquivo');history.back();</script>";
    				exit();
    			}
    		}	
    		$pdo->commit();
    		echo"<script>echo('Registro salvo');history.back();</script>";
    	}else{
    		$erro = $consulta->errorInfo()[2];
    		echo $erro;

    		echo "<script>echo('Não foi possível salvar');</script>";
    		//rollback - voltar a transacao
    		$pdo->rollBack();
    		exit();
    	    }
        }

?>