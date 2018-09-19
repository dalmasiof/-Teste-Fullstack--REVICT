<script type="text/javascript">
   

$('#devedor').on('change', function(e){
    
    if($("#devedor option:selected").val() == 1){
       
        $("#divida").append('<div class="form-group"><input id="valor" name="divida" type="number" step="0,01" class="form-control" id="cpf" name="divida" placeholder="Digite o valor da divida" required="required"></div>' );
    }
    else{
        $("#valor").remove();
    }

    });

</script>
<?php 
echo '  <!-- Modal -->
<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Novo cadastro </h4>
      </div>
      <div class="modal-body" id="getCode">
      <form method="post"  id="formCad">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required">
                            
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" placeholder="CPF" required="required">
                            
                </div>   

                <div class="form-group">
                    <p>Sexo:</p>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" value="feminino">Feminino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" value="masculino">Masculino
                    </label>
                
                            
                </div>
                <div class="form-group">
                    <select class="form-control" name="estado"  required>
                        <option value="nulo">Selecione o estado de nascença</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="ES">Estrangeiro</option>
                    </select>
                </div>
                

    
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                        
                <div class="form-group">
                    <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                </div>

                <div class="form-group">
                    <select class="form-control" name="devedor" id="devedor" required>
                    <option value="nulo">Selecione se o cliente é devedor ou não</option>
                         <option value=1>Sim</option>
                         <option value=0>Não</option>
                
                     </select>
                </div>
                <div id="divida">
                </div>
                
                <button class="btn btn-success" id="Cadastrar" type="submit" >Cadastrar</button>
                <button class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            </form>
      </div>
   </div>
  </div>
</div>';


?>