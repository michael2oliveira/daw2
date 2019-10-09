 <?php
 
 class cat { 
	     
		 private $id_cate;
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
				
			  $objcat = new cat ();
			  
		      $objcat->id_cate= $res ['id_cate'];
			  
	          $objcat->nome = $res ['nome'];
			  
             
       
	       
	            
				
				$retorno [] = $objcat;
			
			    
			
			} 
			   return $retorno;
			   
			   
		}   
			 
			
	         public function retornaUnico(){
				 
	         $sql=  "SELECT * FROM $this->tabela where id_cate=$this->id_cate";
			   
			   $resultado = mysqli_query($this->conexao, $sql);
			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objcat= new cat();
				   $objcat->nome = $res['nome'];
				   $objcat->id_cate = $res['id_cate'];
				  
				   $retorno = $objcat;
				   
			   
			   
			   
			   }

                return $retorno;
				
		}
			  public function editar() {

               $sql = "UPDATE $this->tabela  SET nome = '$this->nome'   WHERE id_cate = $this->id_cate";
			//  echo $sql;
			   $resultado = mysqli_query($this->conexao,$sql);
			   
			   return $resultado;
			   
	    }   
		
                
		   
   		   public function excluir(){
			   
            $sql = "DELETE FROM $this->tabela WHERE id_cate = $this->id_cate";
            $resultado = mysqli_query($this->conexao, $sql);
            return $resultado;
              
        }  
			
			
			
			
              			   
		
     			
		
	} 
	
              
          
			
			
			
			
              			   
			   
         
		
	 
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
