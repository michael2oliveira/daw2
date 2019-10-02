<?php 
   
     
     include_once '../class/adm.class.php';
	 
	
	 
	   $objadm = new adm();
	 
              $listar= $objadm-> listar();	 
			  
			  
			  
	?>	
            
           
	
	     <table border>
		 
		     <thead>
			       
	            <th> ID: </th> 
	        
	            <th> NOME: </th>
                
                <th> EMAIL: </th>
                				
	            <th> SENHA: </th>
				 
				
				 
				 	 
				 
				 
				 
				 
				 
				 
	         <thead>
			 
			 <tbody>
	 
	 <?php
	 
             foreach($listar as $linha){ 
              		
			     echo "<tr>";
			      
				 echo "<td>" .$linha->id_admis."</td>";
				  
	             echo "<td>".$linha->nome ."</td>";
				 
				 
				 echo "<td>" .$linha->email."</td>";
				 
			     
			     echo "<td>" .$linha->senha."</td>";
                
			
				 
				 
				 echo "<td><a href='editar.php?id_admis=".$linha->id_admis."'>Editar</a></td>";
				 
				 echo "<td><a href='excluir.php?id_admis=".$linha->id_admis."'>Excluir</a></td>";
				 
		
			   
			    echo"</tr>";
			 
			 
			 }    
			   
			 
			 
?>		       
            
            
          </tbody>	 
		  
		  
		  
		  </table>  <?php 
		                      
		              ?>
		  