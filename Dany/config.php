<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'reconectarbd';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno){
    //   echo "Erro";
    // } else {
    //   echo "Conexão efetuada com sucesso!";
      
    // }
?>