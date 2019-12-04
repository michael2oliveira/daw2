<?php 
  
  include_once '../topo2.php';      

  include_once '../class/truque.class.php';
  
  
  include_once '../class/categoria.class.php';
  
  
  $objtrq= new trq();
  $objtrq->id_tr= $_GET['id_tr'];
 
  $retorno = $objtrq->retornaUnico();
  
  
  $objcategoria = new cat();
  $categoria = $objcategoria->listar();  
   
    
  
  
  
  
  ?>



<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		  <h2>Editar Truque</h2>
		  


<form action="editarok4.php" method="POST">
       
           <h6>Jogo</h6>

			   <input type ="text" name ="jog" value ="<?php echo $retorno->jogo;?>" /><br>
			
          <br>
          
          <h6>Truque</h6>

			    
          <?= "<textarea name ='truque' cols='40' rows='10'value  echo $retorno->truque; >" .$retorno->truque."</textarea> <br>" ?>
			   
			  <br>
			   
			       <input type= "hidden" name= "idee" value ="<?php echo $retorno->id_tr;?>" />
			   
			   
			  Categoria: <select name="categoria"> 
			  
			  
			     <option value="">Selecione</option>
				 
				 <?php
			            foreach ($categoria as $linha){
							
			            echo "<option value = '$linha->id_cate'> $linha->nome </option>";
			  
			  
			  
						}
			  
			  
			  
			                   
 
     
		                    
			  
			  ?>
			          
			  </select><br>
			  
			  
			  
			  
			  <br>
			  
			  
			  
			  
			   
			   <input type ="submit" value = "ENVIAR"/><br>
		


           </form>


           </form>
           </div>
      </div>
    </div>
  </section>  
  <?php 
		      include_once '../rodape2.php';                     
		              ?>
		  