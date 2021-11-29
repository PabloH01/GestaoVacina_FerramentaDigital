<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<title> Carteira de Vacinação </title>
<body>
<?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
<h3>Carteira de Vacinação Digital</h3>
<form action="vacsearch.php" method="POST">
<input id="search" name="nome_vacina" type="text" placeholder="Pesquise pelo nome da vacina"><input id="submit" type="submit" value="Search">
</form>
<input type='button' onclick="window.location='index.php';" value="Voltar">
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
            <h3><strong>Bem vindo!</strong></h3>
            <h3 class='cinza'>Minhas notificações:</h3><br>
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
    echo "<body>";
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
</html>