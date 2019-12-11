<?php 
   
     include_once '../topo2.php';   
     
     include_once '../class/adm.class.php';
	 
	
	 
	   $objadm = new adm();
	 
              $listar= $objadm-> listar();	 
			  
			  
			  
	?>	
            <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		  <h2>Adicionar Administrador </h2>
           
	
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
		  
		  
		  
		  </table>  
		  
		 
		  </form>
		   </div>
      </div>
    </div>
  </section>
		 
		 <?php 
		                      
							  include_once '../rodape2.php';          ?>
		  