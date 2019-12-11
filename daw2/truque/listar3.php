	  
		<?php     
            include_once '../topo2.php';      
  
		?>
		
	    
	  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		  <h2>Listar Truques</h2>
	
	     <table border>
		 
		     <thead>
			       
	            <th> ID: </th> 
	        
	            <th> JOGO: </th>
                <th> TRUQUES: </th>
                <th> DATA: </th>
				<th> IMAGEM: </th>
				<th> CATEGORIA</th>
				<th> OPÇÕES</th>
				 
				 
				 
				 
				 
				 
	         </thead>
			 
			 <tbody>
	 
	 <?php           
	                  
	 
	 
	                 include_once '../class/truque.class.php';
	 
	
	 
	          $objtrq = new trq();
	 
              $listar= $objtrq->listar();	 
			  
			  
	 
	             
				 
             foreach($listar as $li) { 
              		
			     echo "<tr>";
			      
				 echo "<td>".$li->id_tr ."</td>";
				  
	             echo "<td>".$li->jogo."</td>";
				 
				 echo "<td> ".$li->truque."</td>";
				 
				 echo "<td>".$li->datas ."</td>";
				 
				 echo   "<td><img src='../foto/".$li->foto."' width= '100'/> </td>";

				 echo "<td>".$li->id_cate ."</td>";
				 
			
				 echo "<td><a href='editar4.php?id_tr=".$li->id_tr."'> Editar </a>   <a href='excluir.php?id_tr=".$li->id_tr."'> Excluir </td>";
				 
				 
		 
		 
				
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
		  