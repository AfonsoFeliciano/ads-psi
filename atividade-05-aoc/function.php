 <?php

error_reporting(E_ERROR | E_WARNING | E_PARSE); //oculta warnings / erros 
session_start();  //inicia sessao


if (isset($_POST['converter'])) //recebe formulário via POST
{


//atribuição das variáveis
  $numero = $_POST['numero']; 
  $converter_de = $_POST['opt'];
  $erro_validacao = "O campo está vazio ou não é um valor válido.";
 

//validação inicial
if (! isset($numero) ||  $numero < 0  || ! isset($converter_de)) {

	echo "".$erro_validacao;
	session_destroy();

	
} else {

//inicia tipos de conversão de acordo com a opção selecionada no form
if($converter_de == "dec")
  {
    $numero_decimal = $numero;
  } 

  else if($converter_de == "bin")
  {
    $numero_decimal = bindec($numero);

  }

  else if($converter_de == "oct")
  {
    $numero_decimal = octdec($numero);
  }

  else if($converter_de == "hex")
  {
    $numero_decimal = hexdec($numero);
   }

//atribuição de valores
   $numero_binario = decbin($numero_decimal);
   $numero_octal = decoct($numero_decimal);
   $numero_hexadecimal = dechex($numero_decimal);

//validação de valores possíveis
   	if($numero_binario == 0 && $numero_octal == 0 && $numero_hexadecimal == 0){

   			echo "".$erro_validacao;
   			session_destroy();

   	} else {
//redirecionamento com a conversão para a página index.php
   	$_SESSION['numero_decimal'] = $numero_decimal;
    $_SESSION['numero_binario'] = $numero_binario;
    $_SESSION['numero_octal'] = $numero_octal;
    $_SESSION['numero_hexadecimal'] = $numero_hexadecimal;

    header("Location: index.php");

   		}

	}
 
}

 ?>
