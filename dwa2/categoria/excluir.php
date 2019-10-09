<?php 
   

     include_once '../class/categoria.class.php';
	 
	 
	 
	 $objcat = new cat();
	 
	 $objcat-> id_cate = $_GET['id_cate'];
	 
	 $retorno = $objcat->excluir();
	 
	 if ($retorno ){ 
	 
	    echo "Excluido com sucesso";
		
     }
	 
	 else {
		   echo   "não exluido";
	 }


    
?>		                
		  
