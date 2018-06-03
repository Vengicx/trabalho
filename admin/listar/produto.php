<?php
	//verifica se existe a variavel $pagina
	//$pagina esta sendo configurada no home.php
	if ( !isset ( $pagina ) ) {
		echo "Acesso negado";
		exit;
	}
?>

<h1>Produtos Cadastrados</h1>
<table class="table table-bordered table-dark">
	<thread>
		<tr>
			<td class="text-center">ID</td>
			<td class="text-center">Foto</td>
			<td class="text-center">Nome</td>
			<td class="text-center">Descrição</td>
		</tr>
	</thread>
	<?php

		include "./app/conecta.php";
		$sql = "select * from produto order by id";
		$consulta= $pdo->prepare($sql);
		$consulta->execute();


		while ($dados = $consulta->fetch(PDO::FETCH_OBJ)){
			$id = $dados->id;
			$foto = $dados->foto;
            $nome = $dados->nome;
            $descricao = $dados->descricao;

			echo "<tr>
					<td class='text-center'>$id</td>
					<td class='text-center'><img src='./fotos/$foto'></td>
					<td class='text-center'>$nome</td>
					<td><textarea class='form-control' rows='3'>$descricao</textarea></td>
				</tr>";
		}


	?>

</table>