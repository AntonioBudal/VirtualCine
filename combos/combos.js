function voltar(){
   window.location.href = "../telaInicial/novaTelaInicial.php";
}

function trocarCategoria(id,titulo){
   
   $('#container'+id).css({"z-index": "1"});
   $('#container'+id).animate({opacity: '100%'},500);
   
   for (let index = 0; index < 6; index++) {
      if(index != id){
         $('#container'+index).animate({opacity: '0%'},500);
         $('#container'+index).css({"z-index": "-1"});
      } 
   }
   document.getElementById("caixa2").innerText = titulo;
   
}
var j = 0;
function carrinho(){
   var div = $("#carrinho");
   var div2 = $("#carrinhoC");
   var div3 = $("#ci");
        var currentWidth = div.width();

        if (currentWidth === 0) {
         div3.css("display", "flex");
         div.animate({ width: "500px" }, 1000);
      
          div2.animate({"z-index": "5"},10);
          
        } else {
         div3.css("display", "none");
         div.animate({ width: "0px" }, 1000);
          div2.animate({"z-index": "0"},1000);
          
          
        }
}

function addCarrinho(nomecombo,imagem1,imagem2,preco){
   
   var newLi = $("<li>", {
      class: "carrinho-item",
      id: "new-item"
    }).css("height", "20%");
    var imagemDiv = $("<div>", { class: "imagem" });
    var metadeImagem1 = $("<div>", { class: "metadeImagem" });
    var metadeImagem2 = $("<div>", { class: "metadeImagem" });
    var img1 = $("<img>", {
      src: imagem1,
      height: "100%",
      width: "150%",
      overflow: "hidden",
      alt: "..."
    });
    var img2 = $("<img>", {
      src: imagem2,
      height: "100%",
      width: "150%",
      overflow: "hidden",
      alt: "..."
    });
    
    metadeImagem1.append(img1);
    metadeImagem2.append(img2);
    imagemDiv.append(metadeImagem1, metadeImagem2);
    
    var infoDiv = $("<div>", {
      class: "info",
      id: "ci"
    });
    var h4 = $("<h4>").text(nomecombo);
    var detalhesDiv = $("<div>", { class: "detalhes" });
    var tempoDiv = $("<div>", { class: "tempo" });
    var tempoIcon = $("<i>", { class: "bx bxs-timer" });
    var tempoSpan = $("<span>").text("15 min");
    var statusDiv = $("<div>", { class: "status" });
    var statusIcon = $("<i>", { class: "bx bxs-package" });
    var statusSpan = $("<span>").text("Pronto");
    
    tempoDiv.append(tempoIcon, tempoSpan);
    statusDiv.append(statusIcon, statusSpan);
    detalhesDiv.append(tempoDiv, statusDiv);
    
    var precoDiv = $("<div>", { class: "preco" });
    var precoP = $("<p>").text(preco);
    var contadorDiv = $("<div>", { class: "contador" });
    var minusIcon = $("<i>", { class: "bx bx-minus" });
    var span = $("<span>").text("1");
    var plusIcon = $("<i>", { class: "bx bx-plus" });
    
    contadorDiv.append(minusIcon, span, plusIcon);
    precoDiv.append(precoP, contadorDiv);
    
    infoDiv.append(h4, detalhesDiv, precoDiv);
    
    newLi.append(imagemDiv, infoDiv);
    
    $("#carrinho").append(newLi);
}