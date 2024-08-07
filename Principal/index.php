<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Spaço Reconectar (TCC)</title>
  </head>
  <body>
      <header id="home-header" class="cabecalho">
        <a href="#footerATT"
          ><img
            class="logo-imagem"
            src="../img/logoPrincipal.png"
            alt="Logo Espaço Reconectar"
        /></a>


        
        <nav class="cabecalho-menu">

          <ul class="lista-não-ordenada">
            <li><a href="#psicologas" class="cabecalho-menu-item"><img src="../img/PsicologasOFC.png" alt="Psicologas">
            </a></li>
            <li>
              <a href="#sobre" class="cabecalho-menu-item"><img src="../img/SobreOFC.png" alt="Sobre">
            </li>
            <li>
              <a
                href="#footerATT"
                class="cabecalho-menu-item"
                target="_blank"
                ><img src="../img/LocalizacaoOFC.png" alt="Localização"
              /></a>
            </li>
          </ul>
        </nav>
      </header>

      <hr />

      <main>

      <section class="home-main">
          <div class="info">
            <h1 class="titulo-main">Espaço Reconectar</h1>
            <p class="welcome">Seja Bem-Vindo!! <br>
              </p>
              <br>  
            <p class="desc">Acolhedor ambiente para crescimento pessoal, autocuidado e exploração emocional com suporte terapêutico profissional e abordagens eficazes para o bem-estar.</p>
            <br>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg>
            <br><br>
            <?php
                if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                    $logado = $_SESSION['email'];
                    $nomeUsu = strstr($logado, '@', true);  
                    echo "<p style='border: 1px solid #000; border-radius: 15px; padding: 8px; width: fit-content; margin: 0 auto; box-shadow: 2px 1px 8px #000; cursor: default;'>" . ucfirst($nomeUsu) . "</p>";
                    echo "<br>";
                    echo "<a href='../Entrar-Cadastrar/sair.php' class='btn btn-danger me-5' style='font-size: 1.2rem; font-weight: bold; color: #dc3545; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.842);'>Sair</a>";
                } else {
                    echo "<div class='login'> 
                                <div>
                                    <a href='../entrar-cadastrar/login.php' class='header-entrar'>Entrar</a>
                                </div>
                                <div>
                                    <a href='../Entrar-Cadastrar/cadastro.php' class='header-entrar'>Registrar</a>
                                </div>
                            </div>";
                }
            ?>
            </div>
          <div>
            <img class="logo-imagem-main" src="../img/Img-espaco.jpeg" alt="Foto da Clinica">
          </div>

          
        </section>

        <hr />

        <section  id="psicologas" class="container">

          <div>
            <h1 class="titulo">Selecione sua Psicóloga:</h1>
          </div>

          <div class="section-container">
            <div class="card">
              <img
                class="img-psicologas"
                src="../img/DaniPsi.png"
                alt="Imagem do Card"
              />
              <h2>Dany Queiroz</h2>
              <p>
              Modificando pensamentos, melhorando comportamentos.
              </p>
              <?php
                if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                  $logado = $_SESSION['email']; 
                  echo'<a href="../Dany/Dany.php" class="button">Seja Bem-Vindo(a)</a>';
              } else {
                echo '<form method="post">';
                echo '<button type="submit" name="btnCadastroDan" class="button">Seja Bem-Vindo(a)</button>';
                echo '</form>';

                if (isset($_POST['btnCadastroDan'])) {
                  echo '<p style="color: red; margin-top: 13px">Cadastra-se primeiro.</p>';
              }
            }
            ?>
              
            </div>

            <div class="card">
              <img
                class="img-psicologas2"
                src="../img/NataliaPsi.png"
                alt="Imagem do Card"
              />
              <h2>Natália Silva</h2>
              
              <p>
              Explorando o inconsciente, buscando compreensão.
              </p>

              <?php
                if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                  $logado = $_SESSION['email']; 
                  echo'<a href="../Natalia/NataliaSilva.php" class="button">Seja Bem-Vindo(a)</a>';
              } else {
                
                echo '<form method="post">';
                echo '<button type="submit" name="btnCadastroNat" class="button">Seja Bem-Vindo(a)</button>';
                echo '</form>';

                if (isset($_POST['btnCadastroNat'])) {
                  echo '<p style="color: red; margin-top: 15px">Cadastra-se primeiro.</p>';
              }
            }
            ?>
              
            </div>

            <div class="card">
              <img
                class="img-psicologas"
                src="../img/LiliPsi.png"
                alt="Imagem do Card"
              />
              <h2>Eliana Maria</h2>
              <p>
              Focando no presente, promovendo a totalidade.
              </p>
              
            <?php
                if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
                  $logado = $_SESSION['email']; 
                  echo'<a href="../Eliana/Eliana.php" class="button">Seja Bem-Vindo(a)</a>';
              } else {
                
                echo '<form method="post">';
                echo '<button type="submit" name="btnCadastroEli" class="button">Seja Bem-Vindo(a)</button>';
                echo '</form>';

                if (isset($_POST['btnCadastroEli'])) {
                  echo '<p style="color: red; margin-top: 15px">Cadastra-se primeiro.</p>';
              }
            }
            ?>
              
            </div>
          
          </div>
        </section>

        <hr />

        <div>
          <h1 id="sobre" class="titulo">Quem somos?</h1>
        </div>
        <section class="container1"> 

          <div class="content">
            <img src="../img/LogoPrincipal.png" alt="Imagem">
            <p>O Espaço Reconectar é um refúgio dedicado à jornada interior, um local para aqueles que buscam se reconectar consigo mesmos e com o significado profundo da vida. Este espaço terapêutico oferece um ambiente inspirador e acolhedor, onde pessoas podem trabalhar suas emoções, encontrar clareza e renovar sua vitalidade emocional.<br><br>Cada aspecto do Espaço Reconectar foi minuciosamente projetado para transmitir uma sensação de calma e serenidade. Desde as tonalidades suaves das paredes até os elementos naturais da decoração, tudo contribui para criar uma atmosfera de tranquilidade. O ambiente acolhedor convida os visitantes a se sentirem à vontade para mergulhar em suas reflexões mais profundas.<br><br>Os programas oferecidos no Espaço Reconectar são personalizados para atender às necessidades únicas de cada pessoas, seja buscando alívio do estresse, superação de traumas passados ou simplesmente uma busca por crescimento pessoal, o ambiente proporciona segurança e conforto. Além disso, workshops e atividades interativas ajudam a promover o aprendizado e a conexão com outras pessoas que estão percorrendo caminhos semelhantes.<br><br>Espaço Reconectar não é apenas um local físico, mas uma jornada de autodescoberta e renovação. Ele é um lembrete de que, mesmo em meio à agitação da vida moderna, sempre há espaço para pausar, refletir e se reconectar com o seu "eu" interior. É um convite para uma jornada profunda em direção à cura emocional, crescimento pessoal e uma vida mais autêntica.<br><br> Seja Bem-vindo(a)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg></p>
          </div>
          </section>

      </main>

      <hr />

    </div>

    <footer id="footerATT">
      <a href="#home-header"><img class="logo-footer" src="../img/logoPrincipal.png" alt="logo" /></a>
      <p>
        <span>Endereço:</span>
        <a
          href="https://www.google.com/maps/dir/-18.9104128,-48.2770944/R.+Lebeu,+61+-+Maravilha,+Uberl%C3%A2ndia+-+MG,+38401-446/@-18.9000966,-48.2897214,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94a44427278f9a27:0x47e654b3cfd29be1!2m2!1d-48.2936328!2d-18.8884591?entry=ttu"
          target="_blank"
          >Rua Lebeu, 61 - Maravilha</a
        >
      </p>

      <p>Horário de atendimento de <br>Segunda a Sexta de 8 as 17h</p>
      
      <p><a href="https://www.instagram.com/espacoterapeuticoreconectar/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="color: #fff" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </svg></a>  
      <a href="https://api.whatsapp.com/send?phone=5534996872228" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="color: #FFF" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
      </svg></a>
    </p>
      <p class="copy">&copy;Espaço Reconectar</p>
    </footer>
  </body>
  <script src="./script.js"></script>
</html>
