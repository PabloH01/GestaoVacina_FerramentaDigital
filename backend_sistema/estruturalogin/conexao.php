<?php

$host = "localhost";
$user = "id17845726_admtcc";
$pass = "pq6WDG6UiN@bf";
$banco = "id17845726_carteiravac";

$conexao = mysqli_connect($host, $user, $pass, $banco)
                or die("Problemas com a conexão do Banco de Dados");
                mysqli_set_charset($conexao, "UTF8");
?>