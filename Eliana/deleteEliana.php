<?php

    if(!empty($_GET['id'])){

      include_once('config.php');

      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM agendamento_lili WHERE id_agendamentolili =  $id";
      $result = $conexao->query($sqlSelect);

      if($result->num_rows>0)
      {
        $sqlDelete = "DELETE FROM agendamento_lili WHERE id_agendamentolili = $id";
        $resultDelete = $conexao->query($sqlDelete);
      }
    }
  header('Location: AgendamentoEliana.php')

?>