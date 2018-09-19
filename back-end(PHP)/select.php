<?php 
       //importa a classe
require_once("classDb.php"); 

//instancia da classe 
$objDb = new banco();

//recebe o retorno da conexao
$link = $objDb->conexao();

    
    

//importa a classe
require_once("classCrud.php"); 

//instancia da classe 
$select = new Operacoes();

//acessa o método passando os parametros
$query = $select->select();


?>