<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">




<?php
     

     // print_r($_POST);
	 
	 include_once '../topo2.php';   


	  include_once '../class/adm.class.php';
	  
	  $objadm = new adm();
	  
	  $objadm->nome = $_POST["nome"];
	  
      $objadm->email= $_POST["email"];
	  
      $objadm->senha = md5($_POST["senha"]);	 
       
	
	 
	  $resultado = $objadm->add();
	  
	  if ($resultado)
		  
	       echo "<h1>CADASTRADO COM SUCESSO<h1>";
	   
     else 
		   
	   echo "<h1>NÃO DEU</h1>";
?> 
	</div>
</div>
</div>
</section>

  <?php 
		    include_once '../rodape2.php';                 
		              ?>
		  
