<header>
    <h3>Contato Atualizado</h3>
</header>

<?php
    $con_id = mysqli_real_escape_string($conexao, $_POST["idContato"]);
    $con_nome = mysqli_real_escape_string($conexao,  $_POST["nomeContato"]);
    $con_email = mysqli_real_escape_string($conexao,  $_POST["emailContato"]);
    $con_telefone = mysqli_real_escape_string($conexao,  $_POST["telefoneContato"]);
    $con_endereco = mysqli_real_escape_string($conexao,  $_POST["enderecoContato"]);
    $con_sexo = mysqli_real_escape_string($conexao,  $_POST["sexoContato"]);
    $con_dataNasc = mysqli_real_escape_string($conexao,  $_POST["dataNascContato"]);

    $sql = "UPDATE con_contatos SET
    con_nome = '{$con_nome}',
    con_email = '{$con_email}',
    con_telefone = '{$con_telefone}',
    con_endereco = '{$con_endereco}',
    con_sexo = '{$con_sexo}',
    con_dataNasc = '{$con_dataNasc}'
    WHERE con_id = '{$con_id}'
    ";

    mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta. " . mysqli_error($conexao));

    echo "O registro foi atualizado com sucesso";
?>