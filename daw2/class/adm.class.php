 <?php
 
 class adm { 
	     
		 private $id_admis;
		 private $nome;
		 private $email;
		 private $senha;
		
		 
		 private $conexao;
		 private $tabela;
		 
		 public function __construct() {
			
            $this->conexao=mysqli_connect("localhost","root","","meubanc")	 or die ("erro na conexao")	;
           
		   $this->tabela = "admis";
           
		 } 		   
		 
		 
		  public function __destruct() {
			  
           	unset($this->conexao);
			
		 }
		 
		 public function __get($nome){
			 
			 return $this->$nome;
		 } 
		 
		 public function __set($nome,$value){
		 
	      $this->$nome = $value ;
	    }
        
		  public function add() {
			
		    $sql= "INSERT INTO $this->tabela(nome,email,senha) VALUES ('$this->nome' , '$this->email' , '$this->senha')";
		  
		  
		  $resultado = mysqli_query($this->conexao,$sql);
		  
		  return $resultado;
		  
		} 
		  public function listar() { 
		
		     $sql = "SELECT * FROM $this->tabela";
		  
		    $resultado = mysqli_query($this->conexao,$sql); 
			
			$retorno = null;
			
			while ($res = mysqli_fetch_assoc($resultado) ) {
				
			  $objadm = new adm ();
			  
		      $objadm->id_admis= $res['id_admis'];
			  
	          $objadm->nome = $res['nome'];
			  
              $objadm->email = $res['email']; 
	  
              $objadm->senha = $res['senha'];
       
	       
	            
				
				$retorno [] = $objadm;
			
			    
			
			} 
			   return $retorno;
			   
			   
		}   
			 
			
	         public function retornaUnico(){
				 
	         $sql=  "SELECT * FROM $this->tabela where id_admis=$this->id_admis";
			   
			   $resultado = mysqli_query($this->conexao, $sql);
			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objadm = new adm();
				   $objadm->nome = $res['nome'];
				   $objadm->id_admis = $res['id_admis'];
				   $objadm->email = $res ['email'];
				   $objadm->senha = $res ['senha'];
				   $retorno = $objadm;
				   
			   
			   
			   
			   }

                return $retorno;
				
		}
			  public function editar() {

               $sql = "UPDATE $this->tabela  SET nome = '$this->nome' , email = '$this->email' , senha = $this->senha  WHERE id_admis = $this->id_admis";
			//  echo $sql;
			   $resultado = mysqli_query($this->conexao,$sql);
			   
			   return $resultado;
			   
	    }   
		
                
		   
   		   public function excluir(){
			   
            $sql = "DELETE FROM $this->tabela WHERE id_admis = $this->id_admis";
            $resultado = mysqli_query($this->conexao, $sql);
            return $resultado;
              
        }  
			
			
			
			
              			   
			   
            public function login($objadm){
				//var_dump($this->senha, $this->email);
				$this->conexao=mysqli_connect("localhost","root","","meubanc")	 or die ("erro na conexao")	;
				 
	        	$sql="SELECT * FROM $this->tabela WHERE email='$this->email' and senha = '$this->senha' ";
			   
				//var_dump($sql);
			   $resultado = mysqli_query($this->conexao,$sql);

			   //var_dump($resultado);die;



			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objadm = new adm();

				   
				   $objadm->id_admis = $res['id_admis'];

				   
				   $objadm->nome = $res['nome'];
				   
				   $retorno = $objadm;

				   return $retorno;
			   
			   
			   } 
     			
		
	} 
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>