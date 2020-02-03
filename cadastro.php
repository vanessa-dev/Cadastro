<?php
   //conexao banco de dados
  require_once"asset/php_action/connect_db.php";
  //incluindo os arquivos do layout principal da pagina
  require_once"asset/includes/header.php";
  require_once"asset/includes/body.php";
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h3>Cadastro</h3>
    </div>
    
    <form class="form-signin" action="asset/php_action/cadastrar.php" method="post">
        <div class="row d-flex flex-column align-items-center justify-content-center mb-3">
                <div class="col-6 my-0">
                    <label for="nome" class="control-label"></label>
                    <input class="form-control "  type="text"  id="nome" placeholder="* Nome" name="nome" required /><br> 
                </div>
                <div class="col-6">
                    <label for="email" class="control-label">  </label>
                    <input class="form-control"  type="email"  id="email" placeholder=" E-mail" name="email"  /><br>
                </div>
                <div class="col-6">
                    <label for="endereco" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="endereco" placeholder="Endereco" name="endereco"  /><br>
                </div>
                <div class="col-6">
                    <label for="nEndereco" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="nEndereco" placeholder="Numero de Endereço" name="nEndereco" required /><br>
                </div>
                <div class="col-6">
                    <label for="bairro" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="bairro" placeholder=" Bairro" name="bairro" /><br>
                </div>
                <div class="col-6">
                    <label for="cidade" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="cidade" placeholder=" Cidade" name="cidade"  /><br>
                </div>
                <div class="col-6">
                    <label for="cep" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="cep" placeholder=" Cep" name="cep" maxlength="9" /><br>
                </div>
                <div class="col-6">
                    <label for="estado" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="estado" placeholder=" Estado" name="estado"  /><br>
                </div>
                <div class="col-6">
                    <label for="cpf" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="cpf" placeholder="*Cpf" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required/><br>
                </div>
                <div class="col-6">
                    <button class="btn btn-dark align-self-end" name="btn_cadastro">Cadastrar</button>
                </div>
            
        </div>
    </form>
</main>
<?php
    //footer
    require_once"asset/includes/footer.php";
?>