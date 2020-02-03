<?php
    //variaveis de  configuraçao do banco
    $servername ="localhost";
    $username="root";
    $password="";
    $db="etapa1";
    //conexao com banco de dados
    $connect= mysqli_connect($servername,$username,$password,$db);

    mysqli_set_charset($connect,"utf8");
    //tratamento de erros de conexao
    if(mysqli_connect_error()){
        echo "falha na conexao" .mysqli_connect_error();
    }
?>