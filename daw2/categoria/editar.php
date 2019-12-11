<?php 
    
    include_once '../topo2.php';  

  include_once '../class/categoria.class.php';
  
  $objcat = new cat();
  $objcat->id_cate = $_GET['id_cate'];
  $retorno = $objcat->retornaUnico();
  
  ?>
     <section id="about">
  
       
    <div class="container">
   
      <div class="row">
         
      <div class="col-lg-8 mx-auto">
          
      <h2>Adicionar Categoria</h2>

   <form  method = "POST" action = "editarok.php">
   
   

            <h6>Nome</h6> 
              
         <input type= "text" name= "nome" value ="<?php echo $retorno->nome;?>" />
   
          
		  <input type= "hidden" name= "idee" value ="<?php echo $retorno->id_cate;?>" /><br>
		  <br>
          <input type = "submit" value ="Enviar"  />
   
   
      
   
   
   
   
   
   </form>

   </div>
      </div>
    </div>
  </section>
  
  <?php 
		                      
                          include_once '../rodape2.php';                  ?>
		  