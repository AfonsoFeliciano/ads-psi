<?php

	include "../../conexao.php";

	$id 		= $_POST['id'];
	$nome 		= $_POST['nome'];
	$descricao 	= $_POST['descricao'];
	$valor 		= $_POST['valor'];
	$estrelas 	= $_POST['estrelas'];

	
	if(!empty($nome) && !empty($descricao) && !empty($valor) && !empty($estrelas)) {

	



			if(isset($_FILES['foto'])){


				$extensao = strtolower(substr($_FILES['foto']['name'], -4));
				$novo_nome = md5(time()) . $extensao;
				$diretorio = "../../img/";

				move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);

				$stmt = $conn->prepare("UPDATE produtos SET nome = ?, descricao = ?, valor = ?, foto = ?, estrelas = ? WHERE id = ?");
				$stmt->bind_param("ssdsii", $nome, $descricao, $valor, $novo_nome, $estrelas, $id);
				
				if($stmt->execute()) {

					
						mysqli_close($conn);
						header("Location: index.php?ms=Produto atualizado com sucesso");
						exit();

				} else {

					echo "Erro ao atualizar produto";
				}

		} else {

			echo "A imagem não foi enviada.";

		}

	} else {

		echo "Verifique os campos vazios e tente novamente";
	}





?>