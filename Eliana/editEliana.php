<?php
      session_start();
      
      if(!empty($_GET['id']))
      {
        include_once('../config.php');

          $id = $_GET['id'];

          $sqlSelect = "SELECT * FROM agendamento_lili WHERE id_agendamentolili =  $id";
          $result = $conexao->query($sqlSelect);

          if($result->num_rows>0){
            while($user_data = mysqli_fetch_assoc($result)){

            
            $nome = mysqli_real_escape_string($conexao, $user_data['nome']);
            $email = mysqli_real_escape_string($conexao, $user_data['email']);
            $telefone = mysqli_real_escape_string($conexao, $user_data['telefone']);
            $sexo = mysqli_real_escape_string($conexao, $user_data['sexo']);
            $data_agendamento = mysqli_real_escape_string($conexao, $user_data['data_agendamento']);
            $horario = mysqli_real_escape_string($conexao, $user_data['horario']);
            $plano = mysqli_real_escape_string($conexao, $user_data['plano']);
            $recado = mysqli_real_escape_string($conexao, $user_data['recado']);
            }
            
          }else{
            header('location: AgendamentoEliana.php');
          }

      }
      $logado = $_SESSION['email'];
  ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styleSobre.css" />
    <title>Psicologa Eliana</title>
  </head>
  <body>

<!---------------------------------------//-------------HEADER---------------------//------------------------------------------>


<header class="cabecalho-header" id="home-header">
      <div>
        <a href="../Principal/index.php"
          ><img src="../img/LogoPrincipal.png" alt="Logo Clinica"
        /></a>
      </div>
      
      <div>
          <a href="../Eliana/AgendamentoEliana.php"><h3 class="agendamentos">Meus Agendamentos</h3></a>
        </div>

    </header>
    <hr />

<!---------------------------------------//------------- PRAZER, Eliana! :) ---------------------//------------------------------------------>


<main id="container">
      <div class="sobre">
        <div>
          <h2 id="sobre" class="titulo-main">PRAZER, SOU A Lili!  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
          </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
          </svg>   </h2>
        </div>
        <section class="container1"> 

          <div class="content">
            <img src="../img/lilipsyco.png" alt="Imagem">
            <p>Em minha prática como psicóloga, utilizo a abordagem Gestalt-Terapia, que valoriza a consciência do momento presente e a totalidade da experiência humana. Sou Eliana, e meu propósito é ajudar meus pacientes a se conectarem com seus sentimentos e experiências de maneira plena e autêntica.<br><br>Meu consultório foi cuidadosamente planejado para ser um espaço de acolhimento e tranquilidade. As cores naturais e os elementos decorativos foram escolhidos para criar um ambiente que promove a introspecção e o bem-estar emocional.<br><br>Os tratamentos que ofereço são personalizados para atender às necessidades individuais de cada paciente. Na Gestalt-Terapia, trabalhamos juntos para aumentar a autoconsciência, explorar as emoções e compreender como os pensamentos e comportamentos influenciam a experiência de vida. Este processo facilita o desenvolvimento de novas perspectivas e estratégias para enfrentar desafios pessoais.<br><br>Meu consultório não é apenas um lugar físico, mas um espaço de transformação e crescimento. Convido meus pacientes a embarcarem em uma jornada de autoconhecimento e desenvolvimento pessoal, onde cada sessão é uma oportunidade de descoberta e renovação. Estou aqui para oferecer suporte e orientação, ajudando cada indivíduo a alcançar um maior senso de equilíbrio e realização em suas vidas.<br><br> Seja Bem-vindo(a)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
            </svg></p>
          </div>
      </div>



<!---------------------------------------//-------------FORMULÁRIO---------------------//------------------------------------------>
        <div id="formulario-scroll"></div>
        <div class="caixa">
        <form action="saveEditEliana.php" method="POST" autocomplete="off">
          <fieldset>
            <legend><strong>Agendamento</strong></legend>
            <br />

            <div class="caixa-de-entrada">
              <input
                type="text"
                name="nome"
                id="nome"
                class="usuario-de-entrada"
                value="<?php echo $nome ?>"
                required
              />
              <label for="nome" class="labelInput">Nome Completo</label>
            </div>

            <br /><br />

            <div class="caixa-de-entrada">
              <input
                type="text"
                name="email"
                id="email"
                class="usuario-de-entrada"
                value="<?php echo $logado?>"
                required
                readonly
              />
              <label for="email" class="labelInput"></label>
            </div>

            <br /><br />

            <div class="caixa-de-entrada">
                <input
                  type="text"
                  name="telefone"
                  id="telefone"
                  class="usuario-de-entrada"
                  value="<?php echo $telefone ?>"
                  maxlength="15"
                  required
                />
                <label for="telefone" class="labelInput">Telefone</label>
            </div>

            <p class="title_box_form">Sexo:</p>
            <input
              type="radio"
              id="F"
              name="sexo"
              value="Feminino"
              <?php echo $sexo == ('F') ? 'checked' : '' ?>
              required
              checked
            />
            <label for="F">Feminino</label>
            <br />
            <input
              type="radio"
              id="M"
              name="sexo"
              value="Masculino"
              <?php echo $sexo == ('M') ? 'checked' : '' ?>
              required
            />
            <label for="M">Masculino</label>
            <br />
            <input
              type="radio"
              id="O"
              name="sexo"
              value="Outro"
              <?php echo $sexo == ('O') ? 'checked' : '' ?>
              required
            />
            <label for="O">Outro</label>

            <br />

            <label for="data_agendamento"
              >Data de Agendamento:</label
            >
            <input
              type="date"
              name="data_agendamento"
              id="data_agendamento"
              value="<?php echo $data_agendamento ?>"
              required
            />

            <script>
                var dataAgendamentoInput = document.getElementById("data_agendamento");
                var dataAtual = new Date().toISOString().split("T")[0];
                dataAgendamentoInput.setAttribute("min", dataAtual);
            </script>
            <br />


            <div class="select">
            <label for="data_agendamento"
              >Horários:</label
            >
          
            <select name="horario" id="horario">
                <option value="" disabled selected>Selecione</option>
                <option value="08:00:00" <?php echo $horario == '08:00:00' ? 'selected' : ''; ?>>08:00</option>
                <option value="09:00:00" <?php echo $horario == '09:00:00' ? 'selected' : ''; ?>>09:00</option>
                <option value="10:00:00" <?php echo $horario == '10:00:00' ? 'selected' : ''; ?>>10:00</option>
                <option value="11:00:00" <?php echo $horario == '11:00:00' ? 'selected' : ''; ?>>11:00</option>
                <option value="12:00:00" <?php echo $horario == '12:00:00' ? 'selected' : ''; ?>>12:00</option>
                <option value="13:00:00" <?php echo $horario == '13:00:00' ? 'selected' : ''; ?>>13:00</option>
                <option value="14:00:00" <?php echo $horario == '14:00:00' ? 'selected' : ''; ?>>14:00</option>
                <option value="15:00:00" <?php echo $horario == '15:00:00' ? 'selected' : ''; ?>>15:00</option>
                <option value="16:00:00" <?php echo $horario == '16:00:00' ? 'selected' : ''; ?>>16:00</option>
                <option value="17:00:00" <?php echo $horario == '17:00:00' ? 'selected' : ''; ?>>17:00</option>
                <option value="18:00:00" <?php echo $horario == '18:00:00' ? 'selected' : ''; ?>>18:00</option>
                <option value="19:00:00" <?php echo $horario == '19:00:00' ? 'selected' : ''; ?>>19:00</option>
            </select> 



            </div>

            <div class="select">
              <label for="plano">Planos:</label>

              <select name="plano" id="plano">
                <option value="" disabled selected>Escolha seu Plano</option>
                <option value="Básico" <?php echo $plano == 'Básico' ? 'selected' : ''; ?>>Plano Básico</option>
                <option value="Intermediário" <?php echo $plano == 'Intermediário' ? 'selected' : ''; ?>>Plano Intermediário</option>
                <option value="Premium" <?php echo $plano == 'Premium' ? 'selected' : ''; ?>>Plano Premium</option>
              </select>

            </div>


            <br />

            <label for="recado" class="Deixe-Seu-Recado">
                Uma palavra que se identifica: <span class="opc">(Opcional)</span>
                <input type="text" name="recado" id="recado" value="<?php echo isset($recado) ? $recado : ''; ?>" style="padding: 5px;">
            </label>

            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" name="update" id="update" />
          </fieldset>
        </form>
      </div>
    </main>
    <br>
    <hr>
<!-----------------------------------Planos------------------------------------------------------->

<div class="container-card">

  <div class="card">
    <h2 class="titulo-plano">Plano Básico</h2>
    <p  class="desc-plano"> Ideal para quem busca um suporte mais abrangente para lidar com desafios e melhorar sua saúde mental.</p>
    <ul class="list-noOrdem">
      <li>1 Consultas</li>
      <li>Online/Presencial</li>
    </ul>
    <h3 class="desc-preco">Preço: R$ 130/Dia</h3>
    <a href="#formulario-scroll" class="btn-plano">Selecionar</a>
  </div>

  <div class="card">
    <h2 class="titulo-plano">Plano Intermediário</h2>
    <p  class="desc-plano"> Ideal para quem busca um suporte mais abrangente para lidar com desafios e melhorar sua saúde mental.</p>
    <ul class="list-noOrdem">
      <li>2 Consultas</li>
      <li>Online/Presencial</li>
    </ul>
    
    <h3 class="desc-preco">Preço: R$ 200/Semana</h3>
    <a href="#formulario-scroll" class="btn-plano">Selecionar</a>
  </div>

  <div class="card">
    <h2 class="titulo-plano">Plano Premium</h2>
    <p  class="desc-plano"> Ideal para quem busca um suporte mais abrangente para lidar com desafios e melhorar sua saúde mental.</p>
    <ul class="list-noOrdem">
      <li>4 Consultas</li>
      <li>Online/Presencial</li>
    </ul>
    <h3 class="desc-preco">Preço: R$ 400/mês</h3>
    <a href="#formulario-scroll" class="btn-plano">Selecionar</a>
  </div>    

</div>

<!----------------------------------------Rodape----------------------------------------------->

    <hr>

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

      <p>Horário de atendimento de <br>Segunda a Sexta de 8 as 19h</p>
      
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

  <script src="../indexGobal.js"></script>
</html>
