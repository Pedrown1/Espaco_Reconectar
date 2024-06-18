<?php
      session_start();

      if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha']) ){
         // Acessa
         include_once('../config.php');
         $email = $_POST['email'];
         $senha = $_POST['senha'];

         $sql = "SELECT * FROM usuario_cadastrar WHERE email = '$email' and confirmarSenha = '$senha'";

         $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
         {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $mensagemErro = 'Email ou senha incorreta';
         } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: ../principal/index.php');
            exit();
         };

      }else{
        header('Location: login.php');
      };
?>

