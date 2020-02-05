<?php
    //conexao 
    require_once"connect_db.php";
    //includes de arquivos padrao do layout
    require_once"../includes/header.php";
    require_once"../includes/body.php";
    //select
        $id=mysqli_escape_string($connect,$_GET['id']);
        $sql= "SELECT * FROM cliente WHERE id = '$id'";
        $resultado=mysqli_query($connect,$sql);
        $dados=mysqli_fetch_array($resultado);
   
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h3>Editar Cadastro</h3>
    </div>
    
    <form class="form-signin" action="updarte.php" method="post">
        <div class="row d-flex flex-column align-items-center justify-content-center mb-3">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <div class="col-6 my-0">
                    <label for="nome" class="control-label"></label>
                    <input class="form-control "  type="text"  id="nome" placeholder="* Nome" value="<?php echo $dados['nome']; ?>" name="nome" required /><br> 
                </div>
                <div class="col-6">
                    <label for="email" class="control-label">  </label>
                    <input class="form-control"  type="email"  id="email" placeholder=" E-mail" name="email" value="<?php echo $dados['email']; ?>" /><br>
                </div>
                <div class="col-6">
                    <label for="endereco" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="endereco" placeholder="Endereco" name="endereco" value="<?php echo $dados['endereco']; ?>" /><br>
                </div>
                
                <div class="col-6">
                    <label for="cpf" class="control-label">  </label>
                    <input class="form-control"  type="text"  id="cpf" placeholder="*Cpf" name="cpf" value="<?php echo $dados['cpf']; ?>" required/><br>
                </div>
                <div class="col-6">
                    <button class="btn btn-dark align-self-end" name="btn_editar">Editar</button>
                </div>
            
        </div>
    </form>
</main>
<?php
    //footer
    require_once"../includes/footer.php";
?>
