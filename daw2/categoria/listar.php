<?php 
        include_once '../topo2.php';   
     
     include_once '../class/categoria.class.php';
	 
	
	 
	   $objcat = new cat();
	 
              $listar= $objcat-> listar();	 
			  
			  
			  
	?>	
     <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		
		<h2> Lista de  Categorias</h2>
	
	     <table border>
		 
		     <thead>
			       
	            <th> ID</th> 
	        
	            <th> NOME </th>
                
				<th> OPÇÕES </th>
				 
				
				 
				 	 
				 
				 
				 
				 
				 
				 
	         <thead>
			 
			 <tbody>
	 
	 <?php
	      

             foreach($listar as $linha){ 
              		
			     echo "<tr>";
			      
				 echo "<td>" .$linha->id_cate."</td>";
				  
	             echo "<td>".$linha->nome ."</td>";
				 
				 
				 
                
			
				 
				 
				 echo "<td><a href='editar.php?id_cate=".$linha->id_cate."'>Editar</a> |  <a href='excluir.php?           id_cate=".$linha->id_cate."'>Excluir</a> </td>";
				 
				
				 
		
			   
			    echo"</tr>";
			 
			 
			 }    
			   
			 
			 
?>		       
            
            
          </tbody>	 
		  
		  
		  
		  </table> 
		  </div>
      </div>
    </div>
  </section>
		 
		 <?php 
		                   include_once '../rodape2.php';      
		              ?>
		  