<?php

    if(!empty($_GET['id'])){

      include_once('../config.php');

      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM agendamentos_natalia WHERE id_agendamentoNatalia =  $id";
      $result = $conexao->query($sqlSelect);

      if($result->num_rows>0)
      {
        $sqlDelete = "DELETE FROM agendamentos_natalia WHERE id_agendamentoNatalia = $id";
        $resultDelete = $conexao->query($sqlDelete);
      }
    }
  header('Location: AgendamentoNatalia.php')

?>