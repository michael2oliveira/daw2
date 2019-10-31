
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">


<?php  
      
   include_once '../topo2.php';
   include_once '../class/truque.class.php';
   
   $objtrq = new trq();
   $objtrq->jogo= $_POST["jog"];
   $objtrq->truque= $_POST["truque"];
   $objtrq->datas= date("y-m-d");
   $objtrq->id_cate= $_POST["categoria"];
   $objtrq->id_tr = $_POST["idee"];
   
 
	  
	  
   
   
   
   
   
   
   
   
   
   
   $retorno = $objtrq->editar();
   
   if($retorno) {
   
	   
       echo "<h1>Editado com Sucesso</h1>";
     
    }   
	   
   else {
       echo "<h1>Erro ao Editar</h1>";
   }
  
		                    
?>
		   </div>
      </div>
    </div>
  </section>



  <?php 
		      include_once '../rodape2.php';              
   ?>
		  