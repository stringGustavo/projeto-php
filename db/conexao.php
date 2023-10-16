<?php
include("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die ("Erro na Conexão com o Sevidor" . mysqli_connect_error());