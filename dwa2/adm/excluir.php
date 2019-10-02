<?php 
   

     include_once '../class/adm.class.php';
	 
	 
	 
	 $objadm = new adm();
	 
	 $objadm-> id_admis = $_GET['id_admis'];
	 
	 $retorno = $objadm->excluir();
	 
	 if ($retorno ){ 
	 
	    echo "Excluido com sucesso";
		
     }
	 
	 else {
		   echo   "não exluido";
	 }


    
?>		                
		  