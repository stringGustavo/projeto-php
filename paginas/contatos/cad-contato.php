<header>
    <h3><i class="bi bi-person-add"></i> Cadastro de Contato</h3>
</header>

<div>
    <form action="index.php?menuop=inserir-contato" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeContato">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                <input class="form-control" type="email" name="emailContato">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="telefoneContato">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                <input class="form-control" type="text" name="enderecoContato">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-select" name="sexoContato" id="sexoContato">
                        <option selected>Escolha o sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
    
            <div class="mb-3 col-3">
                <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                    <input class="form-control" type="date" value="<?php echo date("Y/m/d"); ?>" name="dataNascContato">
                </div>
            </div>
        </div>


        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>

</div>