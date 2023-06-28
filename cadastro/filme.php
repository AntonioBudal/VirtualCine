<?php 
        include("conecta.php");
        
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $fundador = $_POST["fundador"];
        $propietario = $_POST["propietario"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
       
        
        $comando3 = $pdo->prepare("INSERT INTO produtora(nome,senha,fundador,propietario,endereco,telefone) VALUES ('$nome','$senha', '$fundador','$propietario','$endereco','$telefone')");

        $resultado = $comando3->execute();
        
        header("location: ../telaInicial/novaTelaInicial.php");
        
?>