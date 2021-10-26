<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../css/main.css">
        <link rel="stylesheet" href="../../../css/css_pages/index.css">
        <title>Página Inicial</title>

        <!-- Open SQL -->
        <?php
        session_start();
        if($_SESSION["permissao"] == 2){
            echo "Bem vindo! " . $_SESSION["CPF_usuario"];
        }else{
            header("Location: ../index.php");
        }
        ?>
    </head>
    <body>
        <!-- Uso do bootstrap -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous">
        </script>

        <script src="../../../js/bootstrap.min.js"></script>
        <!-- Barra de navegação -->
        <div id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="../../../itens/imgs/icovacina.ico" class="img-fluid" width="40%">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><strong>Incluir</strong> uma nova vacina</a></li>
                            <li><a class="dropdown-item" href="#">Fazer uma <strong>consulta</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>Visualizar</strong> minha carteira</a></li>
                            <li><a class="dropdown-item" href="#"><strong>Excluir</strong> uma vacina</a></li>
                            <li><a class="dropdown-item" href="#"><strong>Alterar</strong> os dados</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Vizualizar minhas <strong>notificações</strong></a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                    </div>
                </nav>
                <!-- ESC Barra de navegação -->
                <h3>O que deseja fazer na carteira de vacinação digital?</h3>
                <a href='inclusao.php'>Incluir uma nova vacina em minha carteira</a><br>
                <!-- Fazer depois -->
                <a href='consulta.php'>Consultar uma vacina em minha carteira</a><br>
                <!-- Fazer depois -->
                <a href='geral.php'>Vizualizar minha carteira</a><br>
                <!-- Fazer depois -->
                <a href='exclusao.php'>Excluir uma vacina da minha carteira</a><br>
                <!-- Fazer depois -->
                <a href='alteracao.php'>Alterar os dados de uma vacina em minha carteira</a><br>
                <!-- Fazer depois -->
                <a href='notificacao.php'>Minhas notificações</a><br>
                <!-- Fazer depois -->
                <a href='verdadosuser.php'>Meus Dados</a><br>
                <!-- Fazer depois -->
            </div>
        </div>
    </body>
</html>

