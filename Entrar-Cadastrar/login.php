<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css" />
    <script
      src="https://kit.fontawesome.com/cf6fa412bd.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body style="width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(
    180deg,
    rgba(222, 184, 135, 1) 72%,
    rgba(162, 130, 89, 1) 100%
  );">
  
    <div class="corpo">
    <div><h4><a href="../Principal/index.php" style=" color:#000; padding: 5px;">Voltar</a></h4></div>
      <div class="container">
      
          <div class="title" style="font-size: 40px; text-shadow: 2px 4px 10px rgb(235, 144, 139); font-weight: 600; margin-top: 30px; font-style: italic; cursor: default;">
          Entrar
          </div>
        
          <form id="signin" action="" method="POST">
            <input type="email" name="email" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" name="senha" placeholder="Senha" required />
            <i class="fas fa-lock iPassword"></i>
            
            <input type="submit" name="submit" class="allbtn" value="Entrar" style="background-image: linear-gradient(
                to right,
                rgb(235, 144, 139),
                rgb(172, 107, 104)
              );
              color: white;
              border-radius: 30px;
              width: 100%;
              border: none;
              outline: none;
              padding: 8px 15px;
              font-size: 15px;
              margin-top: 20px;
              cursor: pointer;">
            <a class="TelaCadastro" href="./cadastro.php">Cadastrar</a>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include_once('testLogin.php');

                    if (isset($mensagemErro)) {
                        echo '<p style="color: red; margin-top: 20px; font-size: 14px; font-weight: bold;">' . $mensagemErro . '!</p>                        ';
                    }
                }
                ?>
          </form>        
          
      </div>
  </body>
</html>
