<?php
include "../../conexao.php";
 
$sqlProd = mysqli_query($conn,'Select * from produtos');

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


	
      
     
   

		<br><br><br><br><br><br><br><br><br><br>
         <h1 align="center">Atualizar</h1>
         <hr>

         	<?php 
				while($prd = mysqli_fetch_object($sqlProd)):
			?>
				<div class='listaGrande'>
					<div id="bordaarredondada">
						<!--<a href="#">-->
				            <div class='imagem'> <img src='../../img/<?php echo $prd->foto ?>' title='' class='img-thumbnail'> </div>
				            <div class='nomeprd'> <?php echo $prd->nome ?> </div>
				            <div class='nomeprd'> <?php echo $prd->descricao ?> </div>
				            <div class='nomeprd'> <?php echo "R$ " . $prd->valor ?> </div>
				         

			        	<!--</a>-->
			            <div>
			            	<?php
			            	    //loop para estrelas
			            		for($i=1 ; $i <= 5 ; $i++) {
			            			$estrela = '<div class="listaMedia"> <i class="fa fa-star fa-2x" aria-hidden="true"></i></div>';
			            			if($i <= $prd->estrelas)
			            				echo "<span class='textoAmarelo'> $estrela </span>";
			            			else
			            				echo "<span class='textoCinza'> $estrela </span>"; 

			            		}
			            	?>
			            	<br><br><br>
			            	<form action="update.php" method="post">

			            		<button type="submit" class="btn btn-primary atualizar" name="atualizar" value="<?= $prd->id ?>">Atualizar</button>

								
			            
											

								
							</form>
			         	</div>
			         	<div class='limpa'></div>
					</div>

				</div>
			<?php
				endwhile;
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
