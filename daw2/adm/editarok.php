
	  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
<?php  
     
   include_once '../topo2.php';   


   include_once '../class/adm.class.php';
   
   $objadm = new adm();
   $objadm->nome = $_POST["nome"];
   $objadm->email = $_POST["email"];
   $objadm->senha = $_POST["senha"];
   $objadm->id_admis =$_POST["idee"];
   
   $retorno = $objadm->editar();
   
   if($retorno) {
   
	   
       echo "<h1>Alterado com Sucesso</h1>";
	   
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
		                      
                              include_once '../rodape2.php';            ?>
              