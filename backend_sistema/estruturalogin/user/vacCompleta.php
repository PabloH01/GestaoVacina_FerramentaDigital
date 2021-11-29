<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Vacinação Completa</title>
    <link rel="stylesheet" href="../../../css/main.css">
    <link rel="stylesheet" href="../../../css/css_pages/index.css">
    <link rel="stylesheet" href="../../../css/css_pages/footer.css">
    <link rel="stylesheet" href="../../../css/css_pages/vacCompleta.css">
    <body>
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous">
    </script>
    <script src="../../../js/bootstrap.min.js"></script>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="../../../itens/imgs/logovacinaEscrita.ico" class="img-fluid">
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
                    <li><a class="dropdown-item" href="notificacao.php">Vizualizar minhas <strong>notificações</strong></a></li>
                    <li><a class="dropdown-item" href="geral.php"><strong>Carteira de Vacinação</strong> completa</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="inclusao.php"><strong>Incluir</strong> uma nova vacina</a></li>
                    <li><a class="dropdown-item" href="verdadosuser.php">Vizualizar meus <strong>dados</strong></a></li>
                    <li><a class="dropdown-item" href="consulta.php"><strong>Verificar</strong> uma vacina</a></li>
                    <li><a class="dropdown-item" href="alteracao.php"><strong>Alterar</strong> os dados</a></li>
                    <li><a class="dropdown-item" href="exclusao.php"><strong>Deletar</strong> um registro</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Precisa de<strong> ajuda?</strong></a></li>
                    <li><a class="dropdown-item" href="#">Encerrar<strong> seção</strong></a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <?php
            session_start();
            if($_SESSION["permissao"] != 2){
                header("Location: ../index.php");
            }
    ?>
    <!-- <b>* Clique na imagem para ver detalhes</b><br><br> -->
    <?php
        include_once('../conexao.php');
        $CPF_usuario = $_SESSION["CPF_usuario"];

        // ajustando a instrução select para ordenar por data de vacina
        $query = mysqli_query($conexao,"select * from vacinas where CPF_usuario = '$CPF_usuario' order by data_vac asc");

        if (!$query) {
            echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));  
        }
        echo "
        <body>
        <div id='tabelaVacinas'>
            <div class='container not'>
                <!-- Nav Bar -->
                <h3><strong>Carteira de completa de Vacinação</strong></h3>
                <form action='vacsearch.php' method='POST'>
                <input id='search' name='nome_vacina' type='text' placeholder='Pesquise pelo nome da vacina'><input id='submit' type='submit' value='Search'>
                </form>
                <div class=container azul>
                <h3 class='cinza'>Gestão de Vacinação Digital:</h3><br>
                <table class='table'>
                <thead>
                    <tr>
                    <th scope='col'>Código</th>
                    <th scope='col'>Nome da Vacina</th>
                    <th scope='col'>Fabricante</th>
                    <th scope='col'>Vacinador</th>
                    <th scope='col'>Registro profissional do vacinador</th>
                    <th scope='col'>Quant. Dose</th>
                    <th scope='col'>Data de aplicação</th>
                    </tr>
                </thead>  
        ";
        
        while($dados = mysqli_fetch_array($query)){      
        echo "</tr>";
        echo "<td align = 'center'>" . $dados['ID_vacina'] . "</td>";
        echo "<td align = 'center'>". $dados['nome_vacina'] . "</td>";
        echo "<td align = 'center'>". $dados['fabricante'] . "</td>";
        echo "<td align = 'center'>" . $dados['vacinador'] . "</td>";
        echo "<td align = 'center'>". $dados['regProfVacinador'] . "</td>";
        echo "<td align = 'center'>". $dados['dose'] . "</td>";
        echo "<td align = 'center'>". $dados['data_vac'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        //  // buscando a na pasta imagem
        //  if (empty($dados['imagem'])) {
        //     $imagem = 'SemImagem.png';
        // } else {
        //     $imagem = $dados['imagem'];
        // }
        // echo "<td align='center'><a href='imagens/$imagem'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
        echo "</tr>";
    }
        echo "</table>";
        mysqli_close($conexao);
        ?>
        <br>
        <input type='button' onclick="window.location='index.php';" value="Voltar">
    </body>
    <div class="content">
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <div class="linha"></div>
                <li><a href="#">Informações</a></li>
                <li><a href="#">Suporte</a></li>
                <li><a href="#">Redes Sociais</a></li>
            </ul>
            <p class="footer-copyright">© 2021 Copyright - Pablo Henrique e Rafaela Petelin</p>
        </div>
        <div class="barra">
            <br><br>
        </div>
    </footer>
</html>