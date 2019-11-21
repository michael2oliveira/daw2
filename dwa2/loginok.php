
<?php  
        session_start();		
    
     include_once './class/adm.class.php';

	 
	 $objadm= new adm();
	 $objadm->email = $_POST['email'];
	 $objadm->senha = $_POST['senha'];
	 
	 $resultado = $objadm->login();
	 
	 
	 if ($resultado) { 
	 
	   $_SESSION ['id_admis'] = $resultado->id_admis;
	   
	   $_SESSION ['nome'] = $resultado->nome;
	 
	   $_SESSION ['login'] = true;
	   
	 
	   
	    header("Location:./truque/listar3.php");	 	
	 
	 
	 
	 
       echo "logado" ;
       
	 } else {

      echo "Não Deu ";

     } 