<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}

$logado = $_SESSION['email'];

if ($logado == 'sup@gmail.com') {

  $sql_retroativo = "UPDATE agendamentos_dany 
                       SET recado = 'Retroativa' 
                       WHERE data_agendamento < CURDATE() 
                       AND (recado IS NULL OR recado != 'Retroativa')";
    $conexao->query($sql_retroativo);
    
    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM agendamentos_dany 
        WHERE (id_agendamentoDany LIKE '%$data%' OR nome LIKE '%$data%' OR email LIKE '%$data%') 
        ORDER BY id_agendamentoDany DESC";
    } else {
        $sql = "SELECT * FROM agendamentos_dany ORDER BY id_agendamentoDany DESC";
    }
} else {
    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM agendamentos_dany 
        WHERE email = '$logado' 
        AND (id_agendamentoDany LIKE '%$data%' OR nome LIKE '%$data%' OR email LIKE '%$data%') 
        ORDER BY id_agendamentoDany DESC";
    } else {
        $sql = "SELECT * FROM agendamentos_dany WHERE email = '$logado' ORDER BY id_agendamentoDany DESC";
    }
}

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styleAgendamento.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agendamento | Dany</title>
  </head>
  <body>
    <header id="home-header" class="cabecalho">
      <a href="../Principal/index.php"
        ><img
          class="logo-imagem"
          src="../img/logoPrincipal.png"
          alt="Logo Espaço Reconectar"
      /></a>

      <div class="nome-usu">
      <?php  
          echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
        </svg> '. $logado . ' <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
        </svg>';
      ?>
      </div>

      <div class="btns">
        <div class="btn-agendar">
          <a href="../Dany/Dany.php">Agendar</a>
        </div>

        <div class="btn-agendar">
          <a href="../Dany/Dany.php">Voltar</a>
        </div>
      </div>
    </header>
    <hr />
    <main>
    <p style="text-align: center; font-size: 18px; padding-bottom: 15px;">Dany Agendamentos:</p>
    <div class="box-serach">
      <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
      <button onclick="searchData()" class="btn btn-search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
      </button>
    </div>
    <div class="m-5">
      <table class="table text-black table-bg">
  <thead>
    <tr>
      <th scope="col" style="text-align: center;">#</th>
      <th scope="col" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Nome&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Telefone&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Sexo&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col" style="text-align: center;">Data Agendamento</th>
      <th scope="col" style="text-align: center;" >&nbsp;&nbsp;&nbsp;&nbsp;Horario</th>
      <th scope="col" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Plano</th>
      <th scope="col" center;>&nbsp;&nbsp;&nbsp;&nbsp; Recado</th>
      <th scope="col" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($user_data = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $user_data['id_agendamentoDany'] . "</td>";
        echo "<td style='text-align: center;'>" . $user_data['nome'] . "</td>";
        echo "<td style='text-align: center;'>" . $user_data['email'] . "</td>";
          echo "<td style='text-align: center;'>" . $user_data['telefone'] . "</td>";
          echo "<td style='text-align: center;'>" . $user_data['sexo'] . "</td>";
          echo "<td style='text-align: center;'>" . $user_data['data_agendamento'] . "</td>";
          echo "<td style='text-align: center;'>" . $user_data['horario'] . "</td>";
          echo "<td style='text-align: center;'>" . $user_data['plano'] . "</td>";
          echo "<td>  ".$user_data['recado']."  </td>"; 
          echo "<td>
                    <a class='btn btn-sm lapis' href='editDany.php?id=$user_data[id_agendamentoDany]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil text-white' viewBox='0 0 16 16'> .
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/> .
                      </svg>
                    </a>

                    <a class='btn btn-sm btn-danger' href='deleteDany.php?id=$user_data[id_agendamentoDany]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                      </svg>
                    </a>
                </td>";
          echo "<tr>";
      }
    ?>
  </tbody>
</table>
      </div>
    </main>
  </body>
  <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if(event.key == "Enter")
        {
          searchData();
        }
    });

    function searchData(){
      window.location = 'AgendamentoDany.php?search=' + search.value;
    }
  </script>
</html>
