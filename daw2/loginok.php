
<?php  
        session_start();		
    
     include_once './class/adm.class.php';

	 
	 $objadm= new adm();
	 $objadm->email = $_POST['email'];
	 $objadm->senha = md5($_POST['senha']);

	 //var_dump($objadm);
	 
	 $resultado = $objadm->login($objadm);
	 
	 
	 if ($resultado) { 
	 


	   $_SESSION ['id_admis'] = $resultado->id_admis;
	   
	   $_SESSION ['nome'] = $resultado->nome;
	 
	   $_SESSION ['login'] = true;
	   
	   //$_SESSION ['senha'] = ;

		//var_dump($_SESSION);die;
	   
	    header("Location:./truque/listar3.php");	 	
	 
	 
	 
	 
       echo "logado" ;
       
	 } else {

		header("Location:index.php");

     } 