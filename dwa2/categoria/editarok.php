<?php  
     


   include_once '../class/categoria.class.php';
   
   $objcat = new cat();
   $objcat->nome = $_POST["nome"];
  
   $objcat->id_cate =$_POST["idee"];
   
   $retorno = $objcat->editar();
   
   if($retorno) {
   
	   
       echo "Alterado com Sucesso";
	   
   }   
	   
   else {
       echo "Erro ao Editar";
  


     
  }
?>
