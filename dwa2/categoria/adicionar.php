<?php
     

     // print_r($_POST);
	  
	  include_once '../class/categoria.class.php';
	  
	  $objcat= new cat();
	  
	  $objcat->nome = $_POST["nome"];
       
	
	  $resultado = $objcat->add();
	  
	  if ($resultado)
		  
	       echo "CADASTRADO COM SUCESSO";
		   
     else 
		   
	   echo "NÃO DEU";
?>

  <?php 
		                    
		              ?>
		  