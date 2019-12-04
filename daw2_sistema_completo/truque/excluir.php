<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

<?php 
   
        include_once '../topo2.php';
        include_once '../class/truque.class.php';
	 
	 
	 
	 $objtrq = new trq();
	 
	 $objtrq->id_tr = $_GET['id_tr'];
	 
	 $retorno = $objtrq->excluir();
	 
	 if ($retorno ){ 
	 
	    echo "<h1>Excluido com sucesso</h1>";
		
     }
	 
	 else {
		   echo   "<h1> não exluido </h1>";
	 }


    
?>		                
		   </div>
      </div>
    </div>
  </section>



  <?php 
		      include_once '../rodape2.php';              
   ?>
		  