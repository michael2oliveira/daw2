 <?php
 
 class cat { 
	     
		 private $id_admis;
		 private $nome;
		
		
		 
		 private $conexao;
		 private $tabela;
		 
		 public function __construct() {
			
            $this->conexao=mysqli_connect("localhost","root","","meubanc")	
             or die ("erro na conexao")	;
           
		   $this->tabela = "categoria";
           
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
			
	      $sql= "INSERT INTO $this->tabela(nome) VALUES ('$this->nome')";
		  
		  
		  $resultado = mysqli_query($this->conexao,$sql);
		  
		  return $resultado;
		  
		} 
		  public function listar() { 
		
		     $sql = "SELECT * FROM $this->tabela";
		  
		    $resultado = mysqli_query($this->conexao,$sql); 
			
			$retorno = null;
			
			while ($res = mysqli_fetch_assoc($resultado) ) {
				
			  $objadm = new cat ();
			  
		      $objcat->id_admis= $res ['id_cate'];
			  
	          $objcat->nome = $res ['nome'];
			  
             
       
	       
	            
				
				$retorno [] = $objcat;
			
			    
			
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
			
			
			
			
              			   
			   
            public function login(){
				 
	         $sql="SELECT * FROM $this->tabela WHERE email='$this->email' and senha ='$this->senha' and tipo = 'administrador'";
			   
			   echo $sql;
			   
			   $resultado = mysqli_query($this->conexao,$sql);
			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objUsuario = new usuario();
				   $objUsuario->id_usuario = $res['id_usuario'];
				   $objUsuario->nome = $res['nome'];
				   $retorno = $objUsuario;
			   
			   
			   } return $retorno;
     			
		
	} 
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>