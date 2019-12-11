<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
        
<?php
       include_once '../topo2.php';

      


     // print_r($_POST);
	  
	  include_once '../class/categoria.class.php';
	  
	  $objcat= new cat();
	  
	  $objcat->nome = $_POST["nome"];
       
	
	  $resultado = $objcat->add();
	  
	  if ($resultado)
		  
	       echo "<h1> Adicionado Com Sucesso </h1>";
		   
     else 
		   
	   echo "<h1> Não deu</h1>";
?>

  </div>
      </div>
    </div>
  </section>



  <?php 
		      include_once '../rodape2.php';              
   ?>
		  