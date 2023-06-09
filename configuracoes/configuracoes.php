<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIRTUAL CINE</title>
    <link rel="stylesheet" href="configuracoes.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
</head>

<?php
    session_start();
    include("../cadastro/conecta.php");
    $email = $_SESSION['email'];
    $password = $_SESSION['senha'];

    // Prepare and execute the query
    $comando = "SELECT idUsuario, nome, sobrenome FROM usuario WHERE email = :email AND senha = :senha";
    $resultado = $pdo->prepare($comando);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':senha', $password);
    $resultado->execute();

    $htmlContent3 = "";
    $htmlContent2 =  $_SESSION["email"];
    if (isset($_SESSION["telefone"])) {
    $htmlContent3 =  $_SESSION["telefone"];
    }
    $htmlContent4 = "";
    if (isset($_SESSION["endereco"])) {
        $htmlContent4 =  $_SESSION["endereco"];
    }
    
  
    if ($resultado->rowCount() > 0) {
    
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
       
       
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];

        
        
        $htmlContent = "$nome  $sobrenome";
       
       

      
    }
    } else {
   
    echo "No rows found.";
    }   

?>

<body>  



    <div class="principal">
        <div class="cabecalho">
            <div class="cabecalhoBorda" onclick="abrirTela('telaInicial','novaTelaInicial.php');">
               <img src="../img/Logo.png"  height="60%">
            </div>
        </div>
        <div class="menu">
            <div class="botoes" onclick="mudarConfiguracao('planos')">Planos</div>
            <div class="botoes" onclick="mudarConfiguracao('conta')">Conta</div>
         
            <!-- <div class="botoes" onclick="mudarConfiguracao('seguranca')">Segurança</div>
            <div class="botoes" onclick="mudarConfiguracao('termos')">Termos de uso</div> -->
        </div>
        <div class="content">
            <div class="quadPlanos" id="planos">    
                <div class="caixaPlanos">
                    <div class="cabecalhoCP"></div>
                    <div class="planoImg">
                        <img src="../img/TOP.jpg" alt="" width="110%">
                        <div class="textoPlano">
                           
                        </div>

                    </div>
                    <div class="boxTempo">
                            <div class="tempoRestante">
                                <div class="textoRestante"> 180 DIAS</div>
                            </div>
                    </div>

                    <div class="botaoProlongar">
                        Extenda
                    </div>
                </div>
                <div class="caixaPlanos2">
                     <h2>Planos</h2>
                </div>
            </div>
            <div class="quadConta" id="conta">     
                <div class="caixaConta">
                    <div class="perfilFundo">
                        <div class="perfil">
                            <img src="../img/user.png" alt=""></img>
                        </div>
                    </div>
                    <div class="botaoMudar">
                        Alterar
                    </div>
                    <div class="nome">
                        <h1>Nome</h1>
                    </div>
                    <div class="caixaNome">
                        <h1><?php echo "$htmlContent"; ?></h1>
                    </div>
                </div>        
                <div class="caixaConta2">
                    <div class="informacoesPessoais">
                        Informações Pessoais
                    </div>
                    <div class="caixaEmail">
                        <div class="email">
                            E-mail
                        </div>
                        <div class="emails">
                        <h1><?php echo "$htmlContent2"; ?></h1>
                            <img src="../img/Pencil.png" alt="" width="7.5%" onclick="mudarE()"></img>
                        </div>
                    </div>
                    <div class="caixaTelefone">
                        <div class="email">
                            Telefone
                        </div>
                        <div class="emails">
                            <h1><?php echo "$htmlContent3"; ?></h1>
                            <img src="../img/Pencil.png" alt="" width="7.5%" onclick="mudarT()" ></img>
                        </div>
                    </div>
                    <div class="caixaTelefone">
                        <div class="email">
                            Endereço
                        </div>
                        <div class="emails">
                        <h1><?php echo "$htmlContent4"; ?></h1>
                            <img src="../img/Pencil.png" alt="" width="7.5%" onclick="mudarA()" ></img>
                        </div>
                    </div>
                </div>
                <div class="centro">
                    <form action="update.php" class="caixaMudar" id="e" method="post">
                        <div class="cabecalhoMudar">
                            Email
                            <div class="x" onclick="fechar('e')">
                                X
                            </div>

                        </div>
                        <input type="text" name="email">
                        <input class="botao" type="submit">Mudar</div>

                    </form>

                    
                    <form action="updateE.php" class="caixaMudar " id="a" method="post">
                        <div class="cabecalhoMudar">
                            Endereço
                            <div class="x" onclick="fechar('a')">
                                X
                            </div>
                        </div>
                        <input type="text">
                        <input class="botao" type="submit"></div>
                    </form> 

                    <form action="updateT.php" class="caixaMudar " id="t" method="post">
                        <div class= "cabecalhoMudar">
                            Telefone
                            <div class="x" onclick="fechar('t')">
                                X
                            </div>

                        </div>
                        <input type="text" name="telefone">
                        <input class="botao" type="submit"></div>
                    </form>

                    </div>
            </div>
            <div class="quadFaleConosco" id="fale">      
              
            </div>
            <div class="quadSeguranca" id="seguranca"> 

            </div>
            <div class="quadTermosUso" id="termos">    
                    <div class="cabecalhoFaleConosco">
                        Termos de Uso
                    </div>
                   
                   
            </div>
        </div>
    </div>

</body>
<script src="configuracoes.js"></script>
<script src="../jquery-3.6.4.min.js"></script>
</html>