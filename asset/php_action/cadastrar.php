<?php
    require_once"connect_db.php";
    //obtendo os inputs do usuario
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $endereco = mysqli_escape_string($connect,$_POST['endereco']);
    $numero = mysqli_escape_string($connect,$_POST['nEndereco']);
    $bairro = mysqli_escape_string($connect,$_POST['bairro']);
    $cidade = mysqli_escape_string($connect,$_POST['cidade']);
    $uf = mysqli_escape_string($connect,$_POST['estado']);
    $cep = mysqli_escape_string($connect,$_POST['cep']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $cpf= mysqli_escape_string($connect,$_POST['cpf']);
    //Fazendo o cadastro do usuario no banco de dados
    $insert="INSERT INTO cliente (nome,endereco,numero,bairro,cidade,uf,cep,email,cpf) VALUES ('$nome','$endereco','$numero','$bairro','$cidade','$uf','$cep','$email','$cpf')";
   
    if( mysqli_query($connect,$insert)){
        echo "<div class='alert-success'>Cadastrado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao Cadastrar</div>";
    } 
?>