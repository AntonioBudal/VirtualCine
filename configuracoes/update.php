<?php
session_start();

include("../cadastro/conecta.php");

$email = $_POST["email"];
$confirmacaoSenha = $_POST["confirmacaoSenha"];
$_SESSION["email"] = $email;

$comando = $pdo->prepare("UPDATE usuario SET email = :email WHERE senha = :senha");


$comando->bindParam(':email', $email);
$comando->bindParam(':senha', $_SESSION["senha"]);


$resultado = $comando->execute();

header("location: configuracoes.php");
?>