
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

	     
	  
		$nome = $_FILES['imagem']['name'];
       
		$nometempo= $_FILES["imagem"]["tmp_name"];
		  
		$destino = "../foto/".$nome;
		  
		if (move_uploaded_file($nometempo,$destino)) {	  
		//	echo "imagem enviada";
		} 
	
		$objtrq->foto = $nome;
		

		//var_dump($objtrq);die;
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