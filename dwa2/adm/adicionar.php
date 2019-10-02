<?php
     

     // print_r($_POST);
	  
	  include_once '../class/adm.class.php';
	  
	  $objadm = new adm();
	  
	  $objadm->nome = $_POST["nome"];
	  
      $objadm->email= $_POST["email"];
	  
      $objadm->senha =$_POST ["senha"];	 
       
	
	 
	  $resultado = $objadm->add();
	  
	  if ($resultado)
		  
	       echo "CADASTRADO COM SUCESSO";
		   
     else 
		   
	   echo "NÃO DEU";
?>

  <?php 
		                    
		              ?>
		  