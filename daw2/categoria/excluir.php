
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
<?php 
       include_once '../topo2.php';

     include_once '../class/categoria.class.php';
	 
	 
	 
	 $objcat = new cat();
	 
	 $objcat-> id_cate = $_GET['id_cate'];
	 
	 $retorno = $objcat->excluir();
	 
	 if ($retorno ){ 
	 
	    echo "<h1> Excluído com Sucesso</h1>";
		
     }
	 
	 else {
		   echo   "<h1> Não deu</h1>";
	 }
			  
      

    
?>		</div>
</div>
</div>
</section>
		  
<?php include_once '../rodape2.php';     ?>