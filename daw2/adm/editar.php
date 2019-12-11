<?php 
    
  include_once '../topo2.php';   

  include_once '../class/adm.class.php';
  
  $objadm = new adm();
  $objadm->id_admis = $_GET['id_admis'];
  $retorno = $objadm->retornaUnico();
  
  ?>  
  
  <section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
    <h2>Editar Administrador </h2>

  
   <form  method = "POST" action = "editarok.php">

              
          <h6>Nome</h6> 
         <input type= "text" name= "nome" value ="<?php echo $retorno->nome;?>" />
   
         <h6>Email</h6> 
         <input type= "text" name= "email" value ="<?php echo $retorno->email;?>" />

       <h6>Senha</h6> 
	     <input type= "number" name= "senha" value ="<?php echo $retorno->senha;?>" />
          
		  <input type= "hidden" name= "idee" value ="<?php echo $retorno->id_admis;?>" />
		  
          <input type = "submit" value ="Enviar"  />
   
   
   
   
   
   
   
   
   </form>
  




   </div>
      </div>
    </div>
  </section>
  <?php 
		                      
                          include_once '../rodape2.php';            ?>
		  