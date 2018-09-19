<?php 
    class banco{

        private $usuario = "root"; //usuario
        private $senha = ""; //senha
        private $banco = "dbTesteRevict"; //nomeBanco
        private $localizacao = "localhost"; //endereçobanco

     

        public function conexao (){
            //criar a conexao
             $conexao = mysqli_connect($this->localizacao,$this->usuario,$this->senha,$this->banco);

            //ajustar o charset entre a aplicação e o banco de dados
            mysqli_set_charset($conexao,'utf-8'); 

            //verifica se houve erros de conexao
            if(mysqli_connect_errno() != 0){
                echo "Houve erro ao se conectar ao banco de dados mysql: ".mysqli_connect_error();

            }
            return $conexao;

        }

        
    }




?>