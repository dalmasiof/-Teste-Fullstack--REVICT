    <?php
//importa a classe
require_once("classDb.php"); 

//instancia da classe 
$objDb = new banco();

//recebe o retorno da conexao
$link = $objDb->conexao();

    $id = $_POST['idUsuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $devedor = $_POST['devedor'];
    $divida = empty($_POST['divida']) ? 0 :$_POST['divida'];
    $email = $_POST['email'];

//importa a classe
require_once("classCrud.php"); 

//instancia da classe 
$update = new Operacoes();

//acessa o método passando os parametros
$query = $update->update($id,$nome,$cpf,$sexo,$estado,$telefone,$devedor,$divida,$email);
?>