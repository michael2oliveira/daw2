<?php 
   
     
     include_once '../class/categoria.class.php';
	 
	
	 
	   $objcat = new cat();
	 
              $listar= $objcat-> listar();	 
			  
			  
			  
	?>	
            
           
	
	     <table border>
		 
		     <thead>
			       
	            <th> ID: </th> 
	        
	            <th> NOME: </th>
                
            
				 
				
				 
				 	 
				 
				 
				 
				 
				 
				 
	         <thead>
			 
			 <tbody>
	 
	 <?php
	 
             foreach($listar as $linha){ 
              		
			     echo "<tr>";
			      
				 echo "<td>" .$linha->id_cate."</td>";
				  
	             echo "<td>".$linha->nome ."</td>";
				 
				 
				 
                
			
				 
				 
				 echo "<td><a href='editar.php?id_cate=".$linha->id_cate."'>Editar</a></td>";
				 
				 echo "<td><a href='excluir.php?id_cate=".$linha->id_cate."'>Excluir</a></td>";
				 
		
			   
			    echo"</tr>";
			 
			 
			 }    
			   
			 
			 
?>		       
            
            
          </tbody>	 
		  
		  
		  
		  </table>  <?php 
		                      
		              ?> 
		  
		  
		  
