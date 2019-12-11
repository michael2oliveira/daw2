
 <?php  
    
    session_start();

    //var_dump(!isset($_SESSION['id_admis']));

    //session_destroy();
		
	if(!isset($_SESSION['id_admis'])) {
		
	  header("Location:../login.php");		
	}
   

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  

  <title>Cheats.com</title>
<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/scrolling-nav.css" rel="stylesheet">

  <link href="../estilo.css" rel="stylesheet">    
    

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
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../truque/listar3.php'> Listar Truques</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../truque/form4.php'> Novo Truque</a>
          </li>




          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../adm/listaradm.php'> Listar Administrador</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../adm/form2.php'> Novo Administrador</a>
          </li>


         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../categoria/listar.php'>Listar Categoria </a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='../categoria/form3.php'> Nova Categoria</a>
          </li>

          <button > <a href='../logout.php'>Sair</a> </button>
       




        </ul>
      </div>
    </div>
  </nav>
</div>



  