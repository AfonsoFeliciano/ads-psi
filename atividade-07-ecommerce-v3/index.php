<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Ecommerce v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!--Font awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Customizable Css-->
    <link rel="stylesheet" href="css/estilo.css">

  </head>
  <body>

    <!--MENU-->
    <div class="container-fluid menu borda">
      <div class="row">
        <div class="col-md-6 title">
          <h3>Ecommerce Afonso</h3>
        </div>
        <div class="col-md-6">
          <span class="shopping"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> 1 Item </span>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 borda">
        
        <div class="row">
          <div class="col-md-6 mini-img-1 d-none d-md-block">
             <div class="col-md-12 img-pad ">
                <img src="images/got2.jpg" class="img-thumbnail" id="segunda">
            </div>
            <div class="col-md-12 img-pad">
                 <img src="images/got3.jpeg" class="img-thumbnail " id="terceira">
            </div>
          </div>
          <div class="col-md-6 img-book">
                 <img src="images/got1.png" class="img-fluid " id="primeira">    
          </div>
        
      </div>
    
        </div><!--fim primeira coluna-->

        <div class="col-md-7 borda">
          <div class="col-md-12 borda position">
         
          <div class="row borda"><h4>Chronicle of Ice Books in Three Styles<h4></div>
          

          <div class="row borda">
            <div class="col-md-12 pad ">

              Tamanho:<br>
              <button class="tamanho btn btn-default">1m</button>
              <button class="tamanho btn btn-default">2m</button>
              <button class="tamanho btn btn-default">3m</button>
              
            </div>

            <div class="col-md-6 pad  ">
              Cor:<br>
              
              <button class="yellow master circle"></button>
              <button class="blue master circle"></button>
              <button class="black master circle"></button>
            </div>


            <div class="col-md-6 pad">
              Avaliação do Produto:<br>
              <i class="fa fa-star opinion fa-2x" aria-hidden="true"></i>
              <i class="fa fa-star opinion fa-2x" aria-hidden="true"></i>
              <i class="fa fa-star opinion fa-2x" aria-hidden="true"></i>
              <i class="fa fa-star-o opinion fa-2x" aria-hidden="true"></i>
              <i class="fa fa-star-o opinion fa-2x" aria-hidden="true"></i>
            </div>
          </div>
          
        </div> <!--fim segunda coluna-->
        <div class="row central-row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  Preço:<br>
                  R$: 10,00<br>
                  <button class="btn btn-custom"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</button>
                </div>
                <div class="col-md-6">
                  Frete:<br>
                  <label><input type="radio" class="inputFocus" name="otionRadio">PAC: R$ 6,00</label><br>
                  <label><input type="radio" class="inputFocus" name="otionRadio">Sedex: R$ 12,00</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--fim linha-->

      
      
      
      	

      <?php 
      	echo "<div class='row product'>";


 		//PRODUTO 1
      	$img1 = "images/1.png";
      	$img2 = "images/2.png";
      	$img3 = "images/3.jpg";
      	$img4 = "images/4.jpg";

      	$allProducts = array(

      	 array(
      		0 				=> "<div class='col-md-3'>",
      		1 				=> "<img src='$img1' class='img-thumbnail'>",
      		2 				=> "<span class='texto-form'>",
      		3 				=> '<p>George R.R. Martin</p>',
      		4 				=> '<p>A GUERRA DOS TRONOS</p>',
      		5 				=> "<i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>",
		    6 				=> "</span>",
		    7 				=> "</div>"

      	),
      	 array(
      		0 				=> "<div class='col-md-3'>",
      		1 				=> "<img src='$img2' class='img-thumbnail'>",	
      		2 				=> "<span class='texto-form'>",
      		3 				=> '<p>George R.R. Martin</p>',
      		4 				=> '<p>A FÚRIA DOS REIS</p>',
      		5 				=> "<i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star-o opinion fa-2x' aria-hidden='true'></i>",
		     6 				=> "</span>", 
		     7 				=> "</div>"

      	),

      	 array(
      		0 				=> "<div class='col-md-3'>",
      		1 				=> "<img src='$img3' class='img-thumbnail'>",	
      		2 				=> "<span class='texto-form'>",
      		3				=> '<p>George R.R. Martin</p>',
      		4			 	=> '<p>A TORMENTA DE ESPADAS</p>',
      		5 				=> "<i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star-o opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star-o opinion fa-2x' aria-hidden='true'></i>",
		     6 				=> "</span>",
		     7 				=> "</div>"

      	),
      	
      	 array(
      		0				=> "<div class='col-md-3'>",
      		1 				=> "<img src='$img4' class='img-thumbnail'>",	
      		2 				=> "<span class='texto-form'>",
      		3 				=> '<p>George R.R. Martin</p>',
      		4 				=> '<p>O FESTIM DOS CORVOS</p>',
      		5 				=> "<i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>
		              <i class='fa fa-star opinion fa-2x' aria-hidden='true'></i>",
		    6 				=> "</span>", 
		    7 				=> "</div>"
      	)
      );

      foreach ($allProducts as $key => $value) {
      	foreach ($value as $allProducts) {
      		echo $allProducts;
      	}
      }
      
      	
      	echo "</div>"; //fim div row product


       ?>
      
    </div><!--fim container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>

    	var primeira = "images/got1.png";
    	var segunda = "images/got2.jpg";
    	var terceira = "images/got3.jpeg";
    	var auxiliar = "";

      	$(document).ready(function() {
      		$("#segunda").click(function(){
      			$("#primeira").attr("src", segunda);
      			$("#segunda").attr("src", primeira);

      			auxiliar = primeira;
      			primeira = segunda;
      			segunda = auxiliar;
      			aux = "";


      		});

      		$("#terceira").click(function(){
      			$("#primeira").attr("src", terceira);
      			$("#terceira").attr("src", primeira);

      			auxiliar = primeira;
      			primeira = terceira;
      			terceira = auxiliar;



      		});


      	});

      </script>


  </body>
</html>