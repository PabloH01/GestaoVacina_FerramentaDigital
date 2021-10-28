<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<title> Minhas notificações </title>
<link rel="stylesheet" href="../../../css/main.css">
<link rel="stylesheet" href="../../../css/css_pages/notify.css">
<body>
<?php
        session_start();
        if($_SESSION["permissao"] != 2){
            header("Location: ../index.php");
        }
    ?>
<?php
	include_once('../conexao.php');
	$CPF_usuario = $_SESSION["CPF_usuario"];

	// ajustando a instrução select para ordenar por data de vacina
	$query = mysqli_query($conexao,"select * from vacinas where CPF_usuario = '$CPF_usuario' and data_vac = CURDATE() order by data_vac asc");

	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao));  
	}else if(mysqli_num_rows($query) == 0){
        echo '<h4>Você não tem nenhuma vacina pendente hoje!</h4>';
    }else{
    echo "
    <body>
    <div class='container'>
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
}
	mysqli_close($conexao);
?>
<br>
<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>