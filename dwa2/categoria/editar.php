<?php 
    


  include_once '../class/categoria.class.php';
  
  $objcat = new cat();
  $objcat->id_cate = $_GET['id_cate'];
  $retorno = $objcat->retornaUnico();
  
  ?>
  
   <form  method = "POST" action = "editarok.php">
   
         Nome:  <input type= "text" name= "nome" value ="<?php echo $retorno->nome;?>" />
   
          
		  <input type= "hidden" name= "idee" value ="<?php echo $retorno->id_cate;?>" />
		  
          <input type = "submit" value ="Enviar"  />
   
   
   
   
   
   
   
   
   </form>
  
  <?php 
		                      
		              ?>
		  
