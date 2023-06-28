<?php 
        include("conecta.php");
        
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
       
        $senha = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $cnpj = $_POST["cnpj"];
        
        $comando2 = $pdo->prepare("INSERT INTO entregador(telefone,nome,endereco,senha,cnpj) VALUES ('$telefone','$nome', '$endereco','$senha','$cnpj')");

        $resultado = $comando2->execute();
        
        header("location: ../telaInicial/novaTelaInicial.php");
        
?>
 