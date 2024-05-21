<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id_agendamentolili = $_POST['id']; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_agendamento = $_POST['data_agendamento'];
    $horario = $_POST['horario'];
    $plano = $_POST['plano'];
    $recado = $_POST['recado'];

    $consulta = "SELECT COUNT(*) AS registro FROM agendamento_lili WHERE horario = '$horario' AND data_agendamento = '$data_agendamento'";
    $resultado = mysqli_query($conexao, $consulta);

    if ($resultado) {
        $row = mysqli_fetch_assoc($resultado);
        if ($row['registro'] > 0) {
            $data_formatada = date('d/m/Y', strtotime($data_agendamento));
            echo "<script>
                    alert('Já existe um agendamento para esse horário!\\nHorário: $horario\\nIndisponível na data: $data_formatada.');
                    window.location.href = 'AgendamentoEliana.php';
                </script>";
            $query2 = "INSERT INTO HrsIndisp (msg, liberado, telefone) VALUES('$nome - Horário Indisponível', 'N', '$telefone')";
            $result = mysqli_query($conexao, $query2);
            mysqli_commit($conexao);

        } else {
            $sqlUpdate = "UPDATE agendamento_lili
                SET nome = '$nome',
                email = '$email',
                telefone = '$telefone',
                sexo = '$sexo',
                data_agendamento = '$data_agendamento',
                horario = '$horario',
                plano = '$plano',
                recado = '$recado'
                WHERE id_agendamentolili = '$id_agendamentolili'";

            $result = $conexao->query($sqlUpdate);

            header('location: AgendamentoEliana.php');
            exit; 
        }
    } else {
        echo "Erro ao executar a consulta: " . mysqli_error($conexao);
    }
}
?>
