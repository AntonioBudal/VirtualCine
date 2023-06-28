  function Login(){
            var email=document.getElementById('email').value;
            email = email.toLowerCase();
            // var senha=document.getElementById('senha').value;
            window.open('../telaInicial/novaTelaInicial.html?email='+email);
           

        }

function trocaLoginA(){
  $("#c").css("display", "block");  $("#d").css("padding", "7.5%");
  $("#b").css("display", "none");   $("#e").css("padding", "5%");
  $("#a").css("display", "none");   $("#f").css("padding", "5%");
}
function trocaLoginB(){
  $("#c").css("display", "none");   $("#d").css("padding", "5%");
  $("#b").css("display", "block");  $("#e").css("padding", "7.5%");
  $("#a").css("display", "none");   $("#f").css("padding", "5%");
}
function trocaLoginC(){ 
  $("#c").css("display", "none"); $("#d").css("padding", "5%");
  $("#b").css("display", "none"); $("#e").css("padding", "5%");
  $("#a").css("display", "block");$("#f").css("padding", "7.5%");
}