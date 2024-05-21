<?php
      session_start();
      //print_r($_REQUEST);

      if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha']) ){
         // Acessa
         include_once('config.php');
         $email = $_POST['email'];
         $senha = $_POST['senha'];

         $sql = "SELECT * FROM usuario_cadastrar WHERE email = '$email' and senha = '$senha'";

         $result = $conexao->query($sql);

         //print_r($sql);
         //print_r('<br>');
         //print_r($result);

        if(mysqli_num_rows($result) < 1)
         {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            /*echo '<h4>[ERRO] -> Dados Inexistentes!</h4><p>- Realize primeiro o Casdrastro.</p><p><b>Email:</b> ['. $email. '] Não Existe! </p><p><b>Senha:</b> ['. $senha. '] Não Existe! </p>';*/
            $mensagemErro = 'Email ou senha incorreta';
         } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: ../principal/index.php');
            exit();
         };

      }else{
        //Não Acessa
        header('Location: login.php');
      };
?>

