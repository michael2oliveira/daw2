
       
      <?php 
  
      class trq { 
	     
		 private $id_tr;
		 private $jogo;
		 private $truque;
		 private $datas;
		 private $id_cate;
		
		 private $conexao;
		 private $tabela;
		 
		 public function __construct() {
			
            $this->conexao=mysqli_connect("localhost","root","","meubanc")	
             or die ("erro na conexao")	;
           
		   $this->tabela = "trque";
           
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
			
		    $sql= "INSERT INTO $this->tabela(jogo,truque,id_cate) VALUES ('$this->nome' , '$this->truque' , $this->id_cate)";
			
		  echo $sql;
		  
		  $resultado = mysqli_query($this->conexao,$sql);
		  
		  return $resultado;
		  
		} 
		  public function listar($com= "") { 
		
		     $sql = "SELECT $this->tabela.*,categoria.nome as id_cate FROM $this->tabela INNER JOIN categoria ON $this->tabela.id_cate = categoria.id_cate ".$com; 
		  
		    $resultado = mysqli_query($this->conexao,$sql); 
			
			$retorno = null;
			
			while ($res = mysqli_fetch_assoc($resultado) ) {
				
			  $objprodutos = new produtos();
			  
		      $objprodutos-> id_prod= $res['id_prod'];
			  
	          $objprodutos->nome = $res['nome'];
			  
              $objprodutos->imagem = $res['imagem']; 
	  
              $objprodutos ->preco= $res['preco'];
       
	          $objprodutos ->id_cate= $res['id_cate'];
       
	            
				
				$retorno[] = $objprodutos;
			
			    
			
			} 
			   return $retorno;
			   
			   
		}   
			 
			
	         public function retornaUnico(){ 
				 
	         $sql=  "SELECT * FROM $this->tabela WHERE id_prod=$this->id_prod";
			   
			   $resultado = mysqli_query($this->conexao, $sql);
			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objprodutos  = new produtos();
				 
				   $objprodutos->nome = $res['nome'];
				   $objprodutos->imagem = $res['imagem'];
				   $objprodutos->preço= $res['preco'];
				   $objprodutos->id_prod= $res['id_prod'];
				   
				   $retorno = $objprodutos;
				   
			   
			   
			   
			   }

                return $retorno;
				
		}
			  public function editar() {
               $sql = "UPDATE $this->tabela  SET nome = '$this->nome' , imagem = '$this->imagem', preco= $this->preco, id_cate = $this->id_cate  WHERE id_prod = $this->id_prod" ;
			   echo $sql;
			   $resultado = mysqli_query($this->conexao,$sql);
			   
			   return $resultado;
			   
	    }   
		
                
		   
   		   public function excluir(){
			   
            $sql = "DELETE FROM $this->tabela WHERE id_prod = $this->id_prod";
            $resultado = mysqli_query($this->conexao, $sql);
            return $resultado;
              
        }  
			
			
			
			
              			   
			   
             			
		
		
}
 ?>	
 