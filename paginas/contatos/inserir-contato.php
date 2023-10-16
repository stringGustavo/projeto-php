<header>
    <h3>Inserir Contato</h3>
</header>

<?php
    $con_nome = mysqli_real_escape_string($conexao,  $_POST["nomeContato"]);
    $con_email = mysqli_real_escape_string($conexao,  $_POST["emailContato"]);
    $con_telefone = mysqli_real_escape_string($conexao,  $_POST["telefoneContato"]);
    $con_endereco = mysqli_real_escape_string($conexao,  $_POST["enderecoContato"]);
    $con_sexo = mysqli_real_escape_string($conexao,  $_POST["sexoContato"]);
    $con_dataNasc = mysqli_real_escape_string($conexao,  $_POST["dataNascContato"]);

    $sql = "INSERT INTO con_contatos (con_nome, con_email, con_telefone, con_endereco, con_sexo, con_dataNasc) 
    VALUES ('{$con_nome}', '{$con_email}', '{$con_telefone}', '{$con_endereco}', '{$con_sexo}', '{$con_dataNasc}')";

    mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta. " . mysqli_error($conexao));

    echo "O registro foi inserido com sucesso";
?>