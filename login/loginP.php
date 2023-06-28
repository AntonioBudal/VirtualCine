<?php 
session_start();
include("../cadastro/conecta.php");

if (isset($_POST["entrarP"])) {
    $proprietario = $_POST["proprietario"];
    $senha = $_POST["senha"];

    $comando = "SELECT * FROM produtora WHERE proprietario = :proprietario AND senha = :senha";
    $resultado = $pdo->prepare($comando);

    $resultado->bindParam(':proprietario', $proprietario);
    $resultado->bindParam(':senha', $senha);

    $resultado->execute();    
    $result = $resultado->fetch(PDO::FETCH_ASSOC);

    $loginSuccess = ($result !== false);

    if ($loginSuccess) {
        // $_SESSION["proprietario"] = $proprietario; 
        $_SESSION["senha"] = $senha;
        $_SESSION["logado"] = true;
        header("Location: ../telaInicial/novaTelaInicial.php"); 
        exit();
    } else {
       
    }
}

// Include the HTML file after login attempt
include("login.html");
?>