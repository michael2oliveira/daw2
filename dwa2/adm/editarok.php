<?php  
     


   include_once '../class/adm.class.php';
   
   $objadm = new adm();
   $objadm->nome = $_POST["nome"];
   $objadm->email = $_POST["email"];
   $objadm->senha = $_POST["senha"];
   $objadm->id_admis =$_POST["idee"];
   
   $retorno = $objadm->editar();
   
   if($retorno) {
   
	   
       echo "Alterado com Sucesso";
	   
   }   
	   
   else {
       echo "Erro ao Editar";
  


     
  }
?>