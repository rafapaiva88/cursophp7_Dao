<?php 

class Sql extends PDO {
 
  public $nome;

  public function __toString(){

  	echo $this->nome;
  }
	
}

 ?>
