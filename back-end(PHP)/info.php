<?php 
    //importa a classe
require_once("classDb.php"); 

//instancia da classe 
$objDb = new banco();

//recebe o retorno da conexao
$link = $objDb->conexao();

    $id = $_POST['idUsuario'];
    
//importa a classe
require_once("classCrud.php"); 

//instancia da classe 
$getInfo = new Operacoes();

//recebe o retorno da conexao
$query = $getInfo->getInfo($id);


?>