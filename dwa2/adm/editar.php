<?php 
    


  include_once '../class/adm.class.php';
  
  $objadm = new adm();
  $objadm->id_admis = $_GET['id_admis'];
  $retorno = $objadm->retornaUnico();
  
  ?>
  
   <form  method = "POST" action = "editarok.php">
   
         Nome:  <input type= "text" name= "nome" value ="<?php echo $retorno->nome;?>" />
   
         email:  <input type= "text" name= "email" value ="<?php echo $retorno->email;?>" />
		 
	   Senha:     <input type= "number" name= "senha" value ="<?php echo $retorno->senha;?>" />
          
		  <input type= "hidden" name= "idee" value ="<?php echo $retorno->id_admis;?>" />
		  
          <input type = "submit" value ="Enviar"  />
   
   
   
   
   
   
   
   
   </form>
  
  <?php 
		                      
		              ?>
		  