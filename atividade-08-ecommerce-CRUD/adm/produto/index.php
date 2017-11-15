<?php 


	session_start();

	include '../../conexao.php';

	if(isset($_POST['login'])) {

		$login = $_POST['login'];
		$senha = md5($_POST['senha']);



	$consulta = mysqli_query($conn, "select * from usuarios where login='$login' AND senha='$senha' ");
	


	$user = mysqli_fetch_object($consulta);

	if($user) {


			$_SESSION['user'] = $user->nome;
			
			
			
	}


}
 ?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cadastro</title>
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

		<?php 
			if(isset($_SESSION['user'])){


		 ?>


	<nav class="navbar navbar-expand-md  navbar-dark fixed-top navbar-transparente cor-menu-rodape">
		  <!-- Brand -->
		  <a class="navbar-brand disabled" href="#">Ecommerce Afonso</a>

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Navbar links -->
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="listar.php">Produtos Cadastrados</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link" href="atualizar.php">Atualização de Produtos</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link" href="deletar.php">Remoção de Produtos</a>
		      </li>
		       
		    </ul>
		  </div> 
</nav>


	
      
     
   

		<br><br><br><br><br><br><br>
		<h1 align="center">Cadastro de produtos</h1>
		
		<div align="center">
			<?php 

	 			if (isset($_GET) && !empty($_GET['ms'])) {
	 	 		echo $_GET['ms'];
	 	
			 }

		 ?>
		</div>




		<hr>

	<div class="container">
			
			<form action="cadastrar.php" method="post" enctype="multipart/form-data" name="cadastro" class="form-group" style="width: 85%; margin: 0 auto;">
				Nome:<br />
				<input type="text" name="nome" required  class="form-control" placeholder="Nome do Produto..." /><br /><br />
				Descrição:<br />
				<input type="text" name="descricao"  required class="form-control" placeholder="Descrição do Produto..." /><br /><br />
				Valor:<br />
				<input type="text" name="valor" required  class="form-control" placeholder="Valor do Produto..." /> <br/><br />
				Número de estrelas:<br />
				<input type="text" name="estrelas" required pattern="[0-9]+$" class="form-control" placeholder="Quantidade de Estrelas do Produto..." /><br /><br />
				Foto de exibição:<br />
				
				<input type="file" name="foto" class="form-control-file" required="Insira uma imagem" /><br /><br />
				<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar" />
				<button class="btn btn-primary btn-position"><a href='listar.php' class="btn-white">Listar produtos</a></button>
				<button class="btn btn-primary btn-position"><a href='atualizar.php' class="btn-white">Atualizar produtos</a></button>
				<button class="btn btn-primary btn-position"><a href='deletar.php' class="btn-white">Deletar Produtos</a></button>
			
			</form>



	</div><br><br>
		
		
		<?php 
		}else {

			include 'login.php';
		

		}
		 ?>



		 <footer class="container-fluid cor-menu-rodape textoCentro fixed-bottom">
			
			<div class="social-icons">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-envelope"></i></a><br><br>
			</div>
			</div>
			<p class="direitos">Contato e-commerce (55) 35 9 8888-8888</p>
			<p class="direitos">Copyright ® Afonso Feliciano 2017. Todos os direitos reservados.</p>
		</footer>


		 


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>


