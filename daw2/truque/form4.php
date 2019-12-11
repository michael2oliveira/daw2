<!DOCTYPE HTML >
<html>
		  <?php 
		  
		  include_once '../topo2.php';      

		  
		  
		           include_once '../class/categoria.class.php';
				   
                    $objcat = new cat();
                    $categoria = $objcat->listar();					
		  ?>
   <head>
   
 
   
   
      </head> 
	 
	  <body> 

	  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		  <h2>Adicionar Truque</h2>
		  
       
	 
	       <form action="add3.php" method="POST" enctype= "multipart/form-data" >
		   
                  
		        <h6>Jogo</h6> 
			   <input type ="text" name ="jg"/><br>

                       <br>
              
					  <h6>Truque</h6> 
	    	   <textarea name ="trq" cols="40" rows="10"></textarea><br>
			   
			  
			    <br>
			  
                 
			<h6>	Imagem:</h6> <input type="file" name="imagem"><br>




			
			   <br>
			   <h6>Categoria</h6> 


				
		

			 <select name="categoria"  > 
			  
			  
			     <option value="">Selecionar</option>
				 
				 <?php
			            foreach ($categoria as $linha){
							
							
							
			                 echo "<option value = '$linha->id_cate'> $linha->nome </option>";
			  
			  
			  
						}  
			  
			  
			  
			                   
 
     
		                   
			  
			  ?>  <br>
			          
		
			  
			  
			   
			   <input type ="submit" value = "ENVIAR"/><br>
		


           </form>
		  
           </div>
      </div>
    </div>
  </section>
                   
  <?php 
		      include_once '../rodape2.php';                     
		              ?>
		  		


		</body>
		</html>