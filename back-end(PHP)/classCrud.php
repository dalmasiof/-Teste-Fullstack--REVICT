<?php



class Operacoes{
    
    public function inserir($nome,$cpf,$sexo,$estado,$telefone,$devedor, $divida,$email){
        //importa a classe
        require_once("classDb.php"); 
        
        //instancia da classe 
        $objDb = new banco();
        //recebe o retorno da conexao
        $link = $objDb->conexao();

        
        $insertSQL = "insert into usuario (nome,cpf,sexo,estado,telefone,devedor,divida,email)
        values('$nome','$cpf','$sexo','$estado','$telefone','$devedor',' $divida','$email');";
        if(mysqli_query($link,$insertSQL)){
            
         }
        else{
             echo "usuario "." não foi cadastrado com sucesso";
         }

    }

    public function update($id,$nome,$cpf,$sexo,$estado,$telefone,$devedor, $divida,$email){
        //importa a classe
        require_once("classDb.php"); 
        
        //instancia da classe 
        $objDb = new banco();
        //recebe o retorno da conexao
        $link = $objDb->conexao();

        
        
        $updateSQL = "update usuario set nome='$nome',cpf='$cpf',sexo='$sexo', estado='$estado',telefone='$telefone',devedor='$devedor',divida='$divida',email='$email' where id='$id';";
        if(mysqli_query($link,$updateSQL)){
             
         }
        else{
             echo "usuario $usuario"." não foi cadastrado com sucesso";
         }

    }

    public function delete($id){
        //importa a classe
        require_once("classDb.php"); 
        
        //instancia da classe 
        $objDb = new banco();
        //recebe o retorno da conexao
        $link = $objDb->conexao();

        $deleteSQL = "delete from  usuario where id = '$id';";
        if(mysqli_query($link,$deleteSQL))
         {
             alert('usuario '.$id.' foi deletado');
         }
        else{
             echo "usuario $usuario"." não foi deletado com sucesso";
         }

    }

    public function select(){
        //importa a classe
        require_once("classDb.php"); 
        
        //instancia da classe 
        $objDb = new banco();
        //recebe o retorno da conexao
        $link = $objDb->conexao();

        $selectSQL = "select * from usuario order by nome;";
        $tabela = (mysqli_query($link,$selectSQL));

        if($tabela){
             while($registro = mysqli_fetch_array($tabela,MYSQLI_ASSOC)){
                echo "<div class='list-group-item'>";
                echo '<strong>'.$registro['nome'].'</strong>'.' <small> - '.$registro['email'].'</small>';
                echo "<p class='list-group-item-text pull-right'>";
                    //btnAtualizar
                    echo "<button class='btn btn-warning btnUpdate' data-id_usuario='".$registro['id']."' ><i class='fas fa-sync-alt'></i> Atualizar</button> ";
                    //btnDeletar
                    echo "<button type='button' class='btn btn-danger btnDelete' data-id_usuario='".$registro['id']."' ><i class='fas fa-trash-alt'></i> Excluir</button>";
                    //btnInfo
                    echo "<button type='button' class='btn btn-info btnInfo' data-id_usuario='".$registro['id']."' ><i class='fas fa-info-circle'></i> Informações</button>";

                echo "</p>";
                echo "<div class= 'clearfix'></div>";
            echo '</div>';

             }
         }
        else{
             echo "usuario $usuario"." não foi cadastrado com sucesso";
         }

    }

    public function getInfo($id){
         //importa a classe
         require_once("classDb.php"); 
        
         //instancia da classe 
         $objDb = new banco();
         //recebe o retorno da conexao
         $link = $objDb->conexao();
 
         $selectSQL = "select * from usuario where id='$id';";
         $tabela = (mysqli_query($link,$selectSQL));
 
         if($tabela){
              while($registro = mysqli_fetch_array($tabela,MYSQLI_ASSOC)){
                
                
                //<!-- Modal -->
                echo '<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                   <div class="modal-content">
                      <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel"> Detalhes </h4>
                             </div>
                              <div class="modal-body" id="getCode" >
                                     
                              <strong>Nome: '.$registro['nome'].'</strong>'.'<BR>
                              <strong>Sexo: '.$registro['sexo'].'</strong>'.'<BR>
                              <strong>CPF: '.$registro['cpf'].'</strong>'.'<BR>
                              <strong>E-mail: '.$registro['email'].'</strong>'.'<BR>
                                    
                                    <strong>Telefone: '.$registro['telefone'].'</strong>'.'<BR>
                                     <strong>Estado: '.$registro['estado'].'</strong>'.'<BR>';
                                     
                                     if($registro['devedor'] == 0){
                                         echo '<strong>CLIENTE NÃO DEVEDOR</strong>'.'<BR>';
                                     }
                                     else {
                                         echo '<strong>CLIENTE ESTÁ COM UMA DIVÍDA DE: R$ '.$registro['divida'].'</strong>'.'<BR>';
                                     }

                                     
                                     
                             echo'
                            </div>
                         </div>
                        </div>
                    </div>';

                
 
              }
          }
         else{
              echo "usuario $usuario"." não foi cadastrado com sucesso";
          }
 

    }


    

}


?>