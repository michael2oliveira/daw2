

<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

<?php  
      include_once '../topo2.php';      


   include_once '../class/categoria.class.php';
   
   $objcat = new cat();
   $objcat->nome = $_POST["nome"];
  
   $objcat->id_cate =$_POST["idee"];
   
   $retorno = $objcat->editar();
   
   if($retorno) {
   
	   
       echo "<h1> Alterado Com Sucesso</h1>";
	   
   }   
	   
   else {
       echo  "<h1> Não Deu </h1>";  


     
  }
?>  
 	</div>
</div>
</div>
</section>
		  
<?php include_once '../rodape2.php';     ?>