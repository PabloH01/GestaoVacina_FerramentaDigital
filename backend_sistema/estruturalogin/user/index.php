<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../css/main.css">
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- ESC Barra de navegação -->
        <h3>O que deseja fazer na carteira de vacinação digital?</h3>
        <a href='inclusao.php'>Incluir uma nova vacina em minha carteira</a><br>
        <a href='consulta.php'>Consultar uma vacina em minha carteira</a><br>
        <a href='geral.php'>Vizualizar minha carteira</a><br>
        <a href='exclusao.php'>Excluir uma vacina da minha carteira</a><br>
        <a href='alteracao.php'>Alterar os dados de uma vacina em minha carteira</a><br>
        <a href='notificacao.php'>Minhas notificações</a><br>
        <a href='verdadosuser.php'>Meus Dados</a><br>
        
    </body>
</html>

