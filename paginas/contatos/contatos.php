<header>
    <h3><i class="bi bi-person"></i> Contatos</h3>
</header>

<div>
    <a class="btn btn-outline-primary mb-2" href="index.php?menuop=cad-contato"><i class="bi bi-person-add"></i> Novo Contato</a>
</div>

<div>
    <form class="d-flex align-items-center" action="index.php?menuop=contatos" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="texto-pesquisa">
            <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>
        </div>

    </form>
</div>
<div class="tabela">
    <table class="table table-striped table-dark table-bordered table-sm">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Sexo</th>
                <th>Nascimento</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $quantidade = 10;

            $pagina = (isset($_GET["pagina"])) ? (int)$_GET["pagina"] : 1;

            $inicio = ($quantidade * $pagina) - $quantidade;

            $texto_pesquisa = (isset($_POST["texto-pesquisa"])) ? $_POST["texto-pesquisa"] : "";

            $sql = "SELECT con_id, upper(con_nome) AS con_nome,
        lower(con_email) AS con_email, con_telefone,
        upper(con_endereco) AS con_endereco, 
        CASE
            WHEN con_sexo = 'F' THEN 'FEMININO'
            WHEN con_sexo = 'M' THEN 'MASCULINO'
            ELSE 'NÃO ESPECIFICADO'
        END AS con_sexo,
        DATE_FORMAT(con_dataNasc, '%d/%m/%Y') AS con_dataNasc
        FROM con_contatos
        WHERE con_id = '{$texto_pesquisa}' OR
        con_nome LIKE '%{$texto_pesquisa}%'
        ORDER BY con_nome ASC
        LIMIT $inicio, $quantidade
        ";

            $rs = mysqli_query($conexao, $sql) or die("Erro ao executar consulta!" . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
                <tr>
                    <td><?= $dados["con_id"] ?></td>
                    <td class="text-nowrap"><?= $dados["con_nome"] ?></td>
                    <td><?= $dados["con_email"] ?></td>
                    <td class="text-nowrap"><?= $dados["con_telefone"] ?></td>
                    <td class="text-nowrap"><?= $dados["con_endereco"] ?></td>
                    <td><?= $dados["con_sexo"] ?></td>
                    <td><?= $dados["con_dataNasc"] ?></td>
                    <td class="text-center"><a class="btn btn-sm btn-outline-warning" href="index.php?menuop=editar-contato&con_id=<?= $dados["con_id"] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-center"><a class="btn btn-sm btn-outline-danger" href="index.php?menuop=excluir-contato&con_id=<?= $dados["con_id"] ?>"><i class="bi bi-trash3"></i></a></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">

    <?php
    $sqlTotal = "SELECT con_id FROM con_contatos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPaginas = ceil($numTotal / $quantidade);

    echo "<li class='page-item'><span class='page-link bg-dark'>Total de Registros: " . $numTotal . "</span></li>";
    echo "<li class='page-item'><a class='page-link bg-dark' href='?menuop=contatos&pagina=1'>Primeira página</a>";

    if ($pagina > 6) {
    ?>
        <li class="page-item"><a class="page-link bg-dark" href="?menuop=contatos&pagina=<?php echo $pagina - 1 ?>">
                << </a>
        </li>
    <?php
    }

    for ($i = 1; $i <= $totalPaginas; $i++) {

        if ($i >= ($pagina - 5) && $i <= ($pagina + 5)) {

            if ($i == ($pagina)) {

                echo "<li class='page-item active'><span class='page-link bg-dark'>$i</span></li>";
            } else {

                echo "<li class='page-item'><a class='page-link bg-dark' href='?menuop=contatos&pagina=$i'>$i</a></li>";
            }
        }
    }

    if ($pagina < ($totalPaginas - 5)) {
    ?>
        <li class="page-item"><a class="page-link bg-dark" href="?menuop=contatos&pagina=<?php echo $pagina + 1 ?>"> >> </a></li>
    <?php
    }


    echo "<li class='page-item'><a class='page-link bg-dark' href='?menuop=contatos&pagina=$totalPaginas'>Última página</a></li>";
    ?>

</ul>