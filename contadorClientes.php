<?php
    //conexao banco de dados
    require_once"asset/php_action/connect_db.php";
    //incluindo os arquivos do layout principal da pagina
    require_once"asset/includes/header.php";
    require_once"asset/includes/body.php";
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Dashboard</h3>
    </div> 
    <?php
      //selecionando todos os registros de cliente no bd
      $sql="SELECT * FROM cliente";
      $resultado=mysqli_query($connect,$sql);
      //contando total de registros
      $total=mysqli_num_rows($resultado);  
    ?>
    <h4>Total de clientes:<?php echo" $total;"?></h4>
</main> 
<?php
  //footer
  require_once"asset/includes/footer.php";
?>