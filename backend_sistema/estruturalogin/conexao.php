<?php

/*
$host = "localhost";
$user = "root";
$pass = "";
$banco = "carteiravac";
*/

$host = "172.16.20.100";
$user = "pablo";
$pass = "pablo19116";
$banco = "etim_19116";

// git checkout -b galiehbtqe
// git checkout develop

$conexao = mysqli_connect($host, $user, $pass, $banco)
                or die("Problemas com a conexão do Banco de Dados");
                mysqli_set_charset($conexao, "UTF8");
?>