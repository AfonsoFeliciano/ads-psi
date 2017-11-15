<?php



	//conexao com o banco
    //Host, Usuario, Senha, nome do banco

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "ecommerce";

	

	$conn = mysqli_connect($host, $usuario, $senha,$database);

	if ($conn->connect_error) {

		echo "Error: " . $conn->connect_error;
	}
