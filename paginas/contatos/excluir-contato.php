<?php
$con_id = mysqli_real_escape_string($conexao, $_GET['con_id']);
$sql = "DELETE FROM con_contatos WHERE con_id = '{$con_id}'";

$rs = mysqli_query($conexao, $sql);
echo "Registro excluido com sucesso!";
?>

<header>
    <h3>Excluir Contato</h3>
</header>