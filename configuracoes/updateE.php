<?php
session_start();

include("../cadastro/conecta.php");

$endereco = $_POST["endereco"];
$confirmacaoSenha = $_POST["confirmacaoSenha"];
$_SESSION["endereco"] = $endereco;

$comando = $pdo->prepare("UPDATE usuario SET endereco = :endereco WHERE senha = :senha");


$comando->bindParam(':endereco', $endereco);
$comando->bindParam(':senha', $_SESSION["senha"]);


$resultado = $comando->execute();

header("location: configuracoes.php");
?>