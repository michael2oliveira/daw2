<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

<?php 
        include_once '../topo2.php';      


     include_once '../class/adm.class.php';
	 
	 
	 
	 $objadm = new adm();
	 
	 $objadm-> id_admis = $_GET['id_admis'];
	 
	 $retorno = $objadm->excluir();
	 
	 if ($retorno ){ 
	 
	    echo "<h1>Excluido com sucesso</h1>";
		
     }
	 
	 else {
		   echo   "<h1>não exluido</h1>";
	 }







?>	 	</div>
</div>
</div>
</section>
		  


<?php include_once '../rodape2.php';     ?>                
		  

