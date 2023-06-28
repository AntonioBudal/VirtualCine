<?php 
       

        include("conecta.php");
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $confirmacaoSenha = $_POST["confirmacaoSenha"];
        
        $comando = $pdo->prepare("INSERT INTO usuario(nome,sobrenome,email,senha) VALUES ('$nome','$sobrenome', '$email','$senha')");

        $resultado = $comando->execute();
        
        header("location: ../telaInicial/novaTelaInicial.php");
        
    ?>
 