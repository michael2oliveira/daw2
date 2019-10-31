
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

<?php
         include_once '../topo2.php';

     // print_r($_POST);
	  
	  include_once '../class/truque.class.php';
	  
	  $objtrq= new trq();
	  
	  $objtrq->jogo = $_POST["jg"];
	  
      $objtrq->truque= $_POST["trq"];
	  
	  $objtrq->id_cate= $_POST["categoria"];
	  
	  $objtrq->datas = date("Y-m-d") ;

	      $resultado = $objtrq->add();
	  
	  
	  
	  
	  
	  
	  if ($resultado){
		  
	 	   echo "<h1>CADASTRADO COM SUCESSO</h1>";
	  }
	  
     else {
		   
 
 
        echo "<h1> NÃO DEU <h1>";
	 } 
 
 
 
 
     
		                  
		            
		  
 
 
 
?>   
</div>
	</div>
  </div>
</section>

<?php 
		      include_once '../rodape2.php';              
   ?>