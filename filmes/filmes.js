

function translacionarFuncao(i) {
     $('#caixaFilmes'+i).animate({ left: "-=400" },1000);
}

function retornarFuncao(i) {
     $('#caixaFilmes'+i).animate({ left: "+=400" },1000);      
}

     function trocarImagemNaSeleção(imageUrl){
          $('#divisoria').css("background-image","url(" + imageUrl + ")");
     }

function voltar(){
     window.location.href=("../telaInicial/novaTelaInicial.php");
}

function telafilme(i){
     window.location.href= '../telasFilmes/telaFilmes'+i+'.html';
}

function setaPos(){
     var w = window.innerWidth *0.825;
     document.getElementById("seta2").style.left = w+'px';
     document.getElementById("seta4").style.left = w+'px';
}
