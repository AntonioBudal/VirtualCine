<?php 
session_start();
include("../cadastro/conecta.php");

if (isset($_POST["entrarR"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = "SELECT * FROM entregador WHERE email = :email AND senha = :senha";
    $resultado = $pdo->prepare($comando);

    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':senha', $senha);

    $resultado->execute();    
    $result = $resultado->fetch(PDO::FETCH_ASSOC);

    $loginSuccess = ($result !== false);

    if ($loginSuccess) {
        $_SESSION["email"] = $email; 
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