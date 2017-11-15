<?php
include "../../conexao.php";
 
$sqlProd = mysqli_query($conn,'Select * from produtos');

$stmt = $conn->prepare("DELETE  FROM produtos WHERE id = ?");
$stmt->bind_param('i', $_POST['deletar']);
$stmt->execute();
	mysqli_close($conn);
	header("Location: index.php?ms=Produto deletado com sucesso");
	exit();