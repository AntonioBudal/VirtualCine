<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="novaTelaInicial.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <title>Virtual Cine</title>
</head>

<?php
    session_start();
    $logado = false;
    $logado = $_SESSION['logado'];
?>

<body onload="VerificaBotoes()">
    
       <div class="menuPerfil" id="menuPerfil" >
            <div class="perfilSel" onclick="window.location='../configuracoes/configuracoes.php';">Configurações</div>
            <div class="perfilSel">Planos</div>
            <div class="perfilSel">Conta</div>
            <div class="perfilSel">Fale Conosco</div>
            <div class="perfilSel" id = "sair" onclick="sair()">Sair</div>
       </div>

    <div class="cabecalho" id="cabe">
        
        <div class="cabecalhoBorda" onclick="abrirTela('telaInicial','novaTelaInicial.php');">
            <img src="../img/Logo.png"  height="50%">
        </div>
        
        <div class="cabecalhoMeio">
            <!-- Categorias -->
            <div class="cabecalhoBotoes" ><div class="txtBotoes"><div onclick="abrirTela('filmes','filmes.html');">CATEGORIAS</div></div></div>
            <div class="flecha" id = "flecha" onclick="mostrarMenu('categorias','100%');">></div>
            <!-- Combos -->
            <div class="cabecalhoBotoes"><div class="txtBotoes"><div onclick="abrirTela('combos','combos.html');" >COMBOS</div></div></div>
            <div class="flecha" id = "flecha" onclick="mostrarMenu('combos','100%');">></div>
        </div>

        
        <div class="cabecalhoBorda2" >
            <!-- <div class="cabecalhoBusca">
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                
            </div> -->
            <!-- <div class="cabecalhoLupa">
                <img src="../img/Lupa-branca.webp" width="30px" id="btnBusca" alt="Buscar"/>
            </div> -->
            
            
            <?php if ($logado): ?>
                <a href="#"  onclick="MostrarPerfil();">
                <img src="../img/Perfil.png" id="perfil" width=45px class="cabecalhoPerfil">
                </a>
            <?php else: ?>
                <div class="botaoCadastro" onclick ="abrirTela('login','login.html');" id="entrar">ENTRE</div>
            <?php endif; ?>
            
           
        </div>
        <div class="containerAbaPrincipal">
            <div class="containerAba">
                <!-- Categorias -->
                <div class="categorias" id="categorias">
                    
                    <div class="contentAbas"><h3>Aventura</h3>  </div>
                    <div class="contentAbas"><h3>Terror  </h3>  </div>
                    <div class="contentAbas"><h3>Ação    </h3>  </div>
                    <div class="contentAbas"><h3>Romance </h3>  </div>
                    <div class="contentAbas"><h3>Comédia </h3>  </div>               
                </div>
                <!-- Destaques -->
              
                <div class="combos"id="combos">
                    <div class="contentAbas"><h3>Burguer e CocaCola    </h3> </div>
                    <div class="contentAbas"><h3>Pastel e caldo de cana</h3> </div>
                    <div class="contentAbas"><h3>Tacos e churros       </h3> </div>
                    <div class="contentAbas"><h3>Hot Dog e suco        </h3> </div>
                    <div class="contentAbas"><h3>Pizza e Vinho         </h3> </div> 
                </div>
            </div>
           
        </div>

       
    </div>

    <div class="contentSlides">
        <h1>ASSISTA EM CASA</h1>
        <p>OS MELHORES FILMES EM 3D</p>
      
    </div>
    <div class="content">
        
        <div class="containerSlides" id="slides">
           
            <div class="slides">
                <div class="slidesGrad">
                    
                </div>
                <img src="../img/TOP.jpg"  width="100%" >
                
            </div>
            <div class="slides">
                <div class="slidesGrad"></div>
                <img src="../img/STAR.jpg"  width="100%">
            </div>
            <div class="slides">
                <div class="slidesGrad"></div>
                <img src="../img/UP 2.jpg"  width="100%">
            </div>
            <div class="slides">
                <div class="slidesGrad"></div>
                <img src="../img/THOR.jpg"  width="100%">
            </div>
            <div class="slides">
                <div class="slidesGrad"></div>
                <img src="../img/FAST 2.jpg"  width="100%" >
            </div>
        </div>
       
    </div>
    
    <div class="planosQuad">
        <h5>Benefícios </h5>
        <div class="beneficios">
            <div class="beneficiosIcon">
                <img src="../img/america.png" height="80%">
                
            </div>
            <div class="beneficiosC">
                <div class="beneficiosMetade">
                    <h4>ENTREGUE</h4>
                </div>
                <div class="beneficiosMetade">
                    <p>Em toda a américa do Sul</p>
                </div>
            </div>
        </div>
        <div class="beneficios2">
            <div class="beneficiosC">
                <div class="beneficiosMetade2">
                    <h4>CONFIÁVEL</h4>
                </div>
                <div class="beneficiosMetade2">
                    <p>Navegue com conforto e segurança</p>
                </div>
            </div>
            <div class="beneficiosIcon">
                <img src="../img/check.png" height="60%">
                
            </div>
            
        </div>
      
    </div>  

    <div class="containerPlanos">
       <div class="planosCabecalho">
            <div class="planosEscolhas" onclick="Individual()">
                <div class="pEscolhaMetade" >
                    <h4>INDIVIDUAL</h4>
                   
                </div>
                <div class="pEscolhaMetade2">
                    ASSINATURA P/ 1 PESSOA
                </div>
            </div>
            <div class="planosEscolhas2" onclick="Familia()">
                <div class="pEscolhaMetade" >
                    <h4>FAMÍLIA</h4>
                </div>
                <div class="pEscolhaMetade2">
                    ASSINATURA P/ 4 PESSOAS
                </div>
            </div>
       </div>
       <div class="planosContent">
            <div class="planosMetade">
                <div class="planosCombos">
                    <div class="combosQuad" id="q1">
                        <div class="combosQuadI" >
                            <img src="../img/hamburger.jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="combosQuad"  id="q2">
                        
                        <div class="combosQuadI">
                            <img src="../img/batata.jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="combosQuad"id="q3">
                        
                        <div class="combosQuadI" >
                            <img src="../img/Pizza.png" alt="">
                        </div>
                        
                    </div>
                    <div class="combosQuad" id="q4">
                        
                        <div class="combosQuadI" >
                            <img src="../img/Macarrão.jpg"  alt="">
                        </div>
            
                    </div>
                 
                </div>
                <div class="combosBotoes">
                    <div class="combosQuadB" onclick="Mostrarq1('q1','q2','q3','q4')">1</div>
                    <div class="combosQuadB" onclick="Mostrarq2('q1','q2','q3','q4')">2</div>
                    <div class="combosQuadB" onclick="Mostrarq3('q1','q2','q3','q4')">3</div>
                    <div class="combosQuadB" onclick="Mostrarq4('q1','q2','q3','q4')">4</div>
                </div>
                <div class="planoPreco">
                    <div class="pEscolhaMetade">
                        <h4>Preço</h4>
                    </div>
                    <div class="pEscolhaMetade3" id="preco">
                        R$
                    </div>
                </div>
            </div>
            <div class="planosMetade">
                <div class="planosOpcoes" onclick="Assinatura()">
                    <div class="planosC">
                        <div class="planosCheck" id="c1"></div>
                    </div>
                    <div class="planosTextoC">
                        <div class="planosTexto">
                            MENSAL
                        </div>
                        <div class="planosTexto2">
                            Pague a cada 1 mês
                        </div>
                        <div class="planosTexto2">
                            R$10.00
                        </div>
                    </div>
                </div>
                <div class="planosOpcoes" onclick="AssinaturaA()">
                    <div class="planosC">
                        <div class="planosCheck" id="c2"></div>
                    </div>
                    <div class="planosTextoC">
                        <div class="planosTexto">
                            TRIMESTRAL
                        </div>
                        <div class="planosTexto2">
                            Pague a cada 3 meses
                        </div>
                        <div class="planosTexto2">
                            R$25.00
                        </div>
                    </div>
                </div>
                <div class="planosOpcoes" onclick="AssinaturaB()">
                    <div class="planosC">
                        <div class="planosCheck" id="c3"></div>
                    </div>
                    <div class="planosTextoC">
                        <div class="planosTexto">
                            ANUAL
                        </div>
                        <div class="planosTexto2">
                            Pague a cada 1 ano
                        </div>
                        <div class="planosTexto2">
                            R$90.00
                        </div>
                    </div>
                </div>
            </div>
       </div>

    </div>
    <div class="rodape">
        <table width="100%" >
            <tr height = "100%">
                <td width="25%">
                    <div>
                        <p class="titulo1">Virtual Cine</p>
                        <ul class="footer-menu">
                            <li><a href="#" class="txtRodape">Sobre Nós</a></li>
                            <li><a href="#" class="txtRodape">Meu perfil</a></li>
                            <li><a href="#" class="txtRodape">Planos de pagamento</a></li>
                            <li><a href="#" class="txtRodape">Contatos</a></li>
                        </ul>
                    </div>
                </td>
                <td width="25%">
                    <div>
                        <p class="titulo2">Aplicativo</p>
                        <ul class="footer-menu">
                            <li> 
                                <a href="#">
                                <img src="../img/google-play.png" alt="" width="50%">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../img/apple-store.png" alt="" width="50%">
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </td>
                <td width="25%">
                    
                        <div class="social-list">
                            <p class="titulo3">Rede Sociais</p>
                            <ul class="footer-menu">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </ul>
                        </div>

                        
                    
                </td>
                <td width="25%">
                    <div>
                        <p class="titulo1">Políticas</p>
                        <ul class="footer-menu">
                            <li><a href="#" class="txtRodape">Prevenções</a></li>
                        <li><a href="#" class="txtRodape">Privacidade e Segurança</a></li>
                        <li><a href="#" class="txtRodape">Trocas e Cancelamentos</a></li>
                        <li><a href="#" class="txtRodape">Termos de Uso</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="rodapeFinal">Virtual Cine 2023 - Site de filmes 3D</div>
    
    
</body>
  
    
    
    <script src="../jquery-3.6.4.min.js"></script>
    <script src="novaTelaInicial.js"> </script>
</html>