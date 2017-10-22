
<?php 
	require_once("function.php");
 ?>

    <!DOCTYPE html>
    <html>
    <head>

    	<meta charset="utf-8">
    	<title>Conversão de Bases</title>
    	<link rel="stylesheet" type="text/css" href="estilo.css">
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

    </head>
    <body>

    	<h1>Conversão de Bases - AOC</h1>

        <form action="function.php" method="post" class="form-group">
      <input type="text" name="numero" class="form-control" placeholder="Digite o número a ser convertido." style="width: 300px;">
      <p>
      	<br/>
        Converter de:
        <br/><br/>

        <select name="opt" multiple class="form-control" style="width: 300px;">
          <option value="dec">Decimal</option>
          <option value="bin">Binário</option>
          <option value="oct">Octal</option>
          <option value="hex">Hexadecimal</option>
        </select>
      </p>
      <hr>
    <input type="submit" name="converter" class="btn btn-primary" value="Converter">
    </form>
    <hr>
   
	<?php 
	ini_set( 'display_errors', 0 );
	echo "Valor em decimal: ". $_SESSION['numero_decimal'];
	echo "<br>";
	echo "Valor em binário: ". $_SESSION['numero_binario'];
	echo "<br>";
	echo "Valor em octal: ". $_SESSION['numero_octal'];
	echo "<br>";
	echo "Valor em hexadecimal: ". $_SESSION['numero_hexadecimal'];
     ?>

	




  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
    </html>





   



