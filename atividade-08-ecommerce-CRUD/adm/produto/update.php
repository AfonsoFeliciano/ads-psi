<?php
include "../../conexao.php";

$sqlProd = mysqli_query($conn,"SELECT * FROM produtos WHERE id = $_POST[atualizar]");
$prd = mysqli_fetch_object($sqlProd);



?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Atualizar</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- Fontss -->
		<link rel="stylesheet" href="../../less/font-awesome.min.css">
		<!-- Importar arquivo LESS-->
		<link rel="stylesheet/less" type="text/css" href="../../less/style.less" />
		<!-- Incluir script de execução CDN -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
		<!-- Importar arquivo CSS-->
		<link rel="stylesheet" type="text/css" href="../../less/style.css" />
	</head>

	<body>
		<h1 align="center">Atualização de produtos</h1>
		<hr>




				<form action="update2.php" method="post" enctype="multipart/form-data" name="atualizacao" >
							
							<input style="display: none;" type="text" name="id" required  value="<?php echo $prd->id; ?>" /><br /><br />
							Nome:<br />
							<input type="text" name="nome" required value="<?php echo $prd->nome; ?>" /><br /><br />
							Descrição:<br />
							<input type="text" name="descricao" required value="<?php echo $prd->descricao; ?>" /><br /><br />
							Valor:<br />
							<input type="text" name="valor" required value="<?php echo $prd->valor; ?>" /><br /><br />
							Número de estrelas:<br />
							<input type="text" name="estrelas" required pattern="[0-9]+$" value="<?php echo $prd->estrelas; ?>" /><br /><br />
							Foto de exibição:<br />
							<input type="file" name="foto" required class="form-control-file" /><br /><br />
							<input type="submit" name="cadastrar" class="btn btn-primary" value="Atualizar" />
				</form>

	</body>
</html>
























 



