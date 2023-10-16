<?php
$con_id = $_GET['con_id'];

$sql = "SELECT * FROM con_contatos WHERE con_id = {$con_id}";

$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3><i class="bi bi-pencil-square"></i> Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="POST">
        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label" for="idContato">ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                    <input class="form-control" type="text" name="idContato" value="<?= $dados["con_id"] ?>" readonly>
                </div>
            </div>
            <div class="mb-3 col-9">
                <label class="form-label" for="nomeContato">Nome</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input class="form-control" type="text" name="nomeContato" value="<?= $dados["con_nome"] ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-8">
                <label class="form-label" for="emailContato">E-mail</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                    <input class="form-control" type="email" name="emailContato" value="<?= $dados["con_email"] ?>">
                </div>
            </div>
            <div class="mb-3 col-4">
                <label class="form-label" for="telefoneContato">Telefone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input class="form-control" type="text" name="telefoneContato" value="<?= $dados["con_telefone"] ?>">
                </div>
            </div>
        </div>

        <div class="row">
        <div class="mb-3 col-6">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                <input class="form-control" type="text" name="enderecoContato" value="<?= $dados["con_endereco"] ?>">
            </div>
        </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-select" name="sexoContato" id="sexoContato">
                        <option <?php echo ($dados["con_sexo"] == '') ? 'selected' : "" ?> value="">Selecione o gênero</option>
                        <option <?php echo ($dados["con_sexo"] == 'M') ? 'selected' : "" ?> value="M">Masculino</option>
                        <option <?php echo ($dados["con_sexo"] == 'F') ? 'selected' : "" ?> value="F">Feminino</option>
                        <option <?php echo ($dados["con_sexo"] == 'O') ? 'selected' : "" ?> value="O">Outros</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                    <input class="form-control" type="date" name="dataNascContato" value="<?= $dados["con_dataNasc"] ?>">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>