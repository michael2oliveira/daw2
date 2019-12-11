
       
      <?php 
  
      class trq { 
	     
		 private $id_tr;
		 private $jogo;
		 private $truque;
		 private $datas;
		 private $foto;
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
			
		 $sql= "INSERT INTO $this->tabela(jogo,truque,datas,foto,id_cate) VALUES ('$this->jogo','$this->truque','$this->datas','$this->foto',$this->id_cate)";
			
		 echo $sql;
		  
		  $resultado = mysqli_query($this->conexao,$sql);
		  
		  return $resultado;
		  
		} 
		  public function listar($com = "") { 
		
		    $sql = "SELECT $this->tabela.*,categoria.nome as id_cate FROM $this->tabela INNER JOIN categoria ON $this->tabela.id_cate = categoria.id_cate ".$com; 
		   // echo $sql;
		    $resultado = mysqli_query($this->conexao,$sql); 
			
			//var_dump($resultado);
			$retorno = null;
			
			while ($res = mysqli_fetch_assoc($resultado) ) {
				
			  $objtrq = new trq();
			  
		      $objtrq->id_tr= $res['id_tr'];
			  
			  $objtrq->jogo = $res['jogo'];
			  
			  $objtrq->truque= $res['truque'];

              $objtrq->datas = $res['datas']; 
	          
			  $objtrq->foto = $res['foto']; 
	  

			  $objtrq ->id_cate= $res['id_cate'];	  
       
	            
				
				$retorno[] = $objtrq;
			
			    
			
			} 
			   return $retorno;
			   
			   
		}   
			 
			
	         public function retornaUnico(){ 
				 
	         $sql=  "SELECT * FROM $this->tabela WHERE id_tr=$this->id_tr";
			   
			   $resultado = mysqli_query($this->conexao, $sql);
			   $retorno = null;
			   
			   if($res = mysqli_fetch_assoc($resultado)) {
				   
				   $objtrq  = new trq();
				 
				   $objtrq->jogo= $res['jogo'];
				   $objtrq->truque = $res['truque'];
				   $objtrq->foto = $res['foto'];
				   $objtrq->id_cate= $res['id_cate'];
				   $objtrq->id_tr= $res['id_tr'];
				   
				   $retorno = $objtrq;
				   
			   
			   
			   
			   }

                return $retorno;
				
		}
			  public function editar() {

			  $sql = "UPDATE $this->tabela  SET jogo ='$this->jogo' , truque = '$this->truque', datas = '$this->datas' , foto = '$this->foto',id_cate=$this->id_cate  
			  
			  WHERE id_tr= $this->id_tr" ;
			  
			   //echo $sql;
			   
			   $resultado = mysqli_query($this->conexao,$sql);
			   
			   return $resultado;
			   
	    }   
		
                
		   
   		   public function excluir(){
			   
            $sql = "DELETE FROM $this->tabela WHERE id_tr = $this->id_tr";
            $resultado = mysqli_query($this->conexao, $sql);
            return $resultado;
              
        }  
			
			
			
			
              			   
			   
             			
		
		
}
 ?>	
 