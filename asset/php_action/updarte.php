<?php
    //session
   
    require_once"asset/function/connect_db.php";
    //obtendo os inputs do usuario
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $endereco = mysqli_escape_string($connect,$_POST['endereco']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $cpf= mysqli_escape_string($connect,$_POST['cpf']);
    //Fazendo o cadastro do usuario no banco de dados
    $update="UPDATE cliente SET nome='$nome', endereco='$endereco',email=$email',cpf='$cpf' WHERE id= '$id'";
   
    if( mysqli_query($connect,$update)){
     echo "<div class='alert-success'>Cadastrado editado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao editar Cadastro</div>";
    } 
?>