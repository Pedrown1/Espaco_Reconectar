<?php
$returnCriada = '';
if (isset($_POST['submit'])) {
    include_once('../config.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $confirmarSenha = mysqli_real_escape_string($conexao, $_POST['confirmarSenha']);

    $verifica_email = mysqli_query($conexao, "SELECT * FROM usuario_cadastrar WHERE email = '$email'");

    if (mysqli_num_rows($verifica_email) > 0) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $mensagemErroCad = 'Esse email já existe!<br>"<b>' . $email . '</b>"';
    } elseif ($senha != $confirmarSenha) {
        $mensagemErroCad = 'As senhas devem ser <b>iguais!</b>';
    } else {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        $result = mysqli_query($conexao, "INSERT INTO usuario_cadastrar (email, senha, confirmarSenha) VALUES ('$email', '$senhaHash', '$confirmarSenha')");

        if ($result) {
            $returnCriada = 'Conta criada com sucesso!!';
            header('refresh:1.7;url=login.php');
        } else {
            $mensagemErroCad = 'Erro ao criar conta. Por favor, tente novamente.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar</title>
    <link rel="stylesheet" href="./stylecad.css" />
    <script
      src="https://kit.fontawesome.com/cf6fa412bd.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    
    <div class="corpo">
      <div class="container">
          <div class="title">Cadastrar</div>
        
          <form id="signup" action="" method="POST">
            <input type="email" name="email" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" name="senha" placeholder="Senha" required />
            <i class="fas fa-lock iPassword" ></i>
            <input type="password" name="confirmarSenha" placeholder="Confirmar Senha" required />
            <i class="fas fa-lock iPassword2"></i>
            <div class="divCheck">
          </div>
          <input type="submit" name="submit" class="allbtn" value="Cadastrar" style="background-image: linear-gradient(
    to right,
    rgb(235, 144, 139),
    rgb(172, 107, 104)
  );
  color: white;
  border-radius: 30px;
  width: 100%;
  border: none;
  outline: none;
  padding:  8px 15px;
  font-size: 15px;
  margin-top: 20px;
  cursor: pointer;">
          <a class="TelaCadastro" href="./login.php">Ja possuo conta</a>


          <?php
            if (isset($mensagemErroCad)) {
                echo '<p style="color: red; margin-top: 10px; font-size: 14px; ">' . $mensagemErroCad . '</p>';
            }else{
              echo '<p style="color: green; margin-top: 10px; font-size: 14px; ">' . $returnCriada . '</p>';
            }
            ?>
        </form>
      </div>
    </div>
    
  </body>
</html>
