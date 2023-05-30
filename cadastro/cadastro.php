<?php 
        include("conecta.php");
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $confirmacaoSenha = $_POST["confirmacaoSenha"];
        
        $comando = $pdo->prepare("INSERT INTO usuario(nome,sobrenome,email,senha,confirmacaoSenha) VALUES ('$nome','$sobrenome', '$email','$senha', '$confirmacaoSenha')");

        $resultado = $comando->execute();
        
        header("location: cadastro.html");
        
    ?>
 