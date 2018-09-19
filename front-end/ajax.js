$(document).ready(function(){
    function atualizaLista(){
            //carregar a lista de usuario a partir de ajax

            $.ajax({
                url: '../back-end(PHP)/select.php',

                success: function(data){
                    $('#pessoas').html(data); //innerHTmL

                }
            });
        }

        


        $('#pessoas').on('click','.btnDelete',function(){
            
            var id_usuario = $(this).data('id_usuario');//data- é um prefixo html5
            
            
                $.ajax({
                    url: '../back-end(PHP)/delete.php', //arquivo de execução
                    method: 'post',
                    data: {idUsuario: id_usuario},																			
                    success: function(data){//se sucesso então...
                        
                        atualizaLista();
                        
                    }
                });

            

            
        
        });

        
        $('#pessoas').on('click','.btnInfo',function(){
            
            var id_usuario = $(this).data('id_usuario');//data- é um prefixo html5
                $.ajax({
                url: '../back-end(PHP)/info.php',
                method: 'post',
                data: {idUsuario: id_usuario},

                success: function(data){
                  $("#divs").html(data);
                  $("#getCodeModal").modal('show');
                    }
            });
        });

        $('#pessoas').on('click','.btnUpdate',function(){
            
            var id_usuario = $(this).data('id_usuario');//data- é um prefixo html5
            
            
                $.ajax({
                    url: '../back-end(PHP)/atualizar.php', //arquivo de execução
                    method: 'post',
                    data: {idUsuario: id_usuario},																			
                    success: function(data){//se sucesso então...
                         $("#divs").html(data);
                          $("#getCodeModal").modal('show');
                        
                        
                    }
                });

            

            
        
        });
        $('#divs').on('click','.btnAtualizar',function(){
            
            $.ajax({
            url: '../back-end(PHP)/update.php', //arquivo de execução
            method: 'post',
            data: $('#formUpdate').serialize(), 		
            success: function(data){//se sucesso então...
                
                atualizaLista();
                
            }
        });

    

    

});
        $('#btnNovo').click( function(){
            
            var id_usuario = $(this).data('id_usuario');//data- é um prefixo html5
                $.ajax({
                url: '../back-end(PHP)/cad.php',
                method: 'post',
                data: {idUsuario: id_usuario},

                success: function(data){
                  $("#divs").html(data);
                  $("#getCodeModal").modal('show');
                    }
            });
        });
        $('#divs').on('click','.btn-success',function(){
            
                    $.ajax({
                    url: '../back-end(PHP)/insert.php', //arquivo de execução
                    method: 'post',
                    data: $('#formCad').serialize(), 				
                    success: function(data){//se sucesso então..
                        
                        atualizaLista();
                        
                    }
                });

            

            
        
        });

        

        atualizaLista();
});