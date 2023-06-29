<?php
session_start();

include("../cadastro/conecta.php");

$telefone = $_POST["telefone"];
$confirmacaoSenha = $_POST["confirmacaoSenha"];
$_SESSION["telefone"] = $telefone;

$comando = $pdo->prepare("UPDATE usuario SET telefone = :telefone WHERE senha = :senha");


$comando->bindParam(':telefone', $telefone);
$comando->bindParam(':senha', $_SESSION["senha"]);


$resultado = $comando->execute();

header("location: configuracoes.php");
?>