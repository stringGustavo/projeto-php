<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/estilo-padrao.css">

    <title>Sistema Agendador</title>
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="img/logo_agendador.png" alt="" width="120">
                </a>

                <div class="colapse navbar-collapse" id="conteudoNavbarSuportado" >
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=contatos"><i class="bi bi-person"></i> Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=tarefas"><i class="bi bi-card-checklist"></i> Tarefas</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=eventos"><i class="bi bi-calendar-event"></i> Eventos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
    <div class="container">
    <?php
        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

        switch ($menuop) {

            case "home":

                include("paginas/home/home.php");

                break;

            case "contatos":

                include("paginas/contatos/contatos.php");

                break;

            case "cad-contato":

                include("paginas/contatos/cad-contato.php");

                break;

            case "inserir-contato":

                include("paginas/contatos/inserir-contato.php");

                break;

            case "editar-contato":

                include("paginas/contatos/editar-contato.php");

                break;

            case "atualizar-contato":

                include("paginas/contatos/atualizar-contato.php");

                break;

            case "excluir-contato":

                include("paginas/contatos/excluir-contato.php");

                break;

            case "tarefas":

                include("paginas/tarefas/tarefas.php");

                break;

            case "eventos":

                include("paginas/eventos/eventos.php");

                break;

            default:

                include("paginas/home/home.php");

                break;
        }
    ?>
        </div>
    </main>

    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">SIS Agendador v1.0</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>