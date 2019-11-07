<?php 
  
  include_once 'class/truque.class.php';
  include_once 'class/categoria.class.php';
   
  $objtrq = new trq();
  $cate = $_GET['id_cat'];
  $lista = $objtrq->listar("WHERE truque.id_cate = $cate");


  $objcat =  new cat();
  $liste = $objcat->listar();



?>













<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>cheats.com</title>

  <!-- Bootstrap core CSS -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  
    <link href="estilo.css" rel="stylesheet">    
      

</head>

<body >

  <!-- Navigation -->
   
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id = "mainNav" >
    <div class="container"   >
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Cheats.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id = "bn">
       <ul class="navbar-nav ml-auto" id = "lis">

         <?php 
                     foreach($liste as $linha){

                      

          ?>
        
           <li class="nav-item"  class= "nav-link js-scroll-trigger">

           <?= "<a  class= 'nav-link js-scroll-trigger' href='list.php?id_cat =".$linha->id_cate ."' > ".$linha->nome."</a>" ?>
               
               
          </li>
          
           

        
                   <?php   }?>
                   </ul>
      </div>
    </div>
  </nav>
</div>
  <header class="bg-primary text-white">
   
  </header>

  <?php

    foreach($lista as $linha){
   

   ?>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

         <?=      "<h2>". $linha->jogo  .  "</h2>" ?> <br>
          
         <ul>
           
         <?=  "<li> Postado dia :  ".$linha->datas ."</li>"  ?>

         </ul>
            
         <?=  "<p >".$linha->truque ."</p>" ?>
        </div>
      </div>
    </div>
  </section>


  <?php           }         ?>


  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2></h2>
        
        </div>
      </div>
    </div>
  </section>

  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
