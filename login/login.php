<?php 
        include("../cadastro/conecta.php");
        $email = $_GET["email"];
        $senha=  $_GET["senha"];

        $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email =$email AND senha = '$senha");
              if ($comando -> rowcount > 0){
                echo('Logado');
                header("location:../telaInicial/novaTelaInicial.html");
              } else{
                echo('logado');
                
           
              }
          
?>
