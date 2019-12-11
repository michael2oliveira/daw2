
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
		  <h2>Adicionar Administrador </h2>

	 
	       <form action="adicionar.php" method="POST">
		   
		       <h6>Nome</h6> 
		       <input type ="text" name ="nome"/><br>
			 
			   <h6>Email</h6> 
	    	   <input type ="text" name ="email"/><br>
				
			   <h6>Senha</h6> 
			   <input type ="password" name = "senha"/> <br>

			   <div class="g-recaptcha" data-sitekey="6LdrNcQUAAAAAM2Lh1-jiPdJxowLkM5VXSrNoQAE"></div>



			   <br>
			   <input type ="submit" value = "ENVIAR"/><br>
		


           </form>
		   </div>
      </div>
    </div>
  </section>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

		
		</body>
		</html>
		
		<?php 
		                   
						   include_once '../rodape2.php';           ?>
		  