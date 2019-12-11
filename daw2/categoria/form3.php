
<?php    
   include_once '../topo2.php';      

?>


<html>

   <head> 
      </head> 
	 
	  <body> 

	  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		  <h2>Adicionar Categoria</h2>
		  
          <form  action="adicionar.php" method="POST">
		   
				 <h6>Nome</h6> 
				 
		       <input type ="text" name ="nome"/><br>
			           <br>
			   <input type ="submit" value = "ENVIAR"/><br>
		
     
	       


           </form>
           </div>
      </div>
    </div>
  </section>

		
		</body>
		</html>
		
		<?php 
		      include_once '../rodape2.php';                     
		              ?>
		  