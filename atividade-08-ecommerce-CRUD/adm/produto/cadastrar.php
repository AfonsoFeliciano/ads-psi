<?php

	include "../../conexao.php";

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

					$stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, valor, estrelas, foto) VALUES (?, ?, ?, ?, ?)");
					$stmt->bind_param("ssdis", $nome, $descricao, $valor, $estrelas, $novo_nome);
					
					if($stmt->execute()) {

						mysqli_close($conn);
						header("Location: index.php?ms=Produto cadastrado com sucesso");
						exit();


					} else {

						echo "Erro ao cadastrar produto";
					}

			} else {

				echo "A imagem não foi enviada.";

			}



	} else {

		echo "Verifique os campos vazios e tente novamente";

	}








?>