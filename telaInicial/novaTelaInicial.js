 // função pra ler querystring
        
 function queryString(parameter) {  
    var loc = location.search.substring(1, location.search.length);   
    var param_value = false;   
    var params = loc.split("&");   
    for (i=0; i<params.length;i++) {   
        param_name = params[i].substring(0,params[i].indexOf('='));   
        if (param_name == parameter) {                                          
            param_value = params[i].substring(params[i].indexOf('=')+1)   
        }   
    }   
    if (param_value) {   
        return param_value;   
    }   
    else {   
        return undefined;   
    }   
}
var variavel = queryString("usuario");

function VerificaBotoes() {
  if(variavel == undefined){
      document.getElementById('entrar').style.display = 'inline-block';
      document.getElementById('cadastro').style.display = 'inline-block';
      document.getElementById('assinar').style.display = 'none';
  }
  else{
      document.getElementById('entrar').style.display = 'none';
      document.getElementById('cadastro').style.display = 'none';
      document.getElementById('assinar').style.display = 'inline-block';
  }

  
}
function telafilme(i){

    if (variavel == undefined) {
      alert('Precisa logar-se antes!');
    }  
    else {
      window.location.href= '../telasFilmes/telaFilmes'+i+'.html';
    }
}

j = 0

function mostrarMenu(id,val){

    j++;
    if (j == 1)  {
        $('#'+id).css('z-index',2);
        
        $('#'+id).animate({opacity:1,top: (val)}, 1000);
        // $('#'+id).animate({},1000);
        $('#'+id).siblings().animate({top: '0%',opacity:0},500);
        
    }
    else { 
        
        j = 0;
        $('#'+id).animate({top: '-100%',opacity:0},500);
        $('#'+id).css('z-index',1);
       
        
    } 
}

 

function FecharPerfil(){
    $('#menuPerfil').animate({"z-index": "-2"},10);
    $('#menuPerfil').animate({"display": "none"},200);
    $('#menuPerfil').animate({"height": "0%"},200);
   
   
  
}
function MostrarPerfil(){
   
    $('#menuPerfil').animate({height: '100%'},100);
   
    $('#menuPerfil').css("display", "flex");
  
    $('#menuPerfil').animate({"z-index": "20"},10);
}


function Mostrarq1(id1,id2,id3,id4){
    $('#'+id1).css("display", "flex");
    $('#'+id2).css("display", "none");
    $('#'+id3).css("display", "none");
    $('#'+id4).css("display", "none");
    $('#'+id1).animate({width:'100%'},1000);
}

function Mostrarq2(id1,id2,id3,id4){
    $('#'+id1).css("display", "flex");
    $('#'+id2).css("display", "flex");
    $('#'+id3).css("display", "none");
    $('#'+id4).css("display", "none");
    $('#'+id1).animate({width:'45%'},500);
    $('#'+id2).animate({width:'45%'},500);
}

function Mostrarq4(id1,id2,id3,id4){
    $('#'+id1).css("display", "flex");
    $('#'+id2).css("display", "flex");
    $('#'+id3).css("display", "flex");
    $('#'+id4).css("display", "flex");
    $('#'+id1).animate({width:'20%'},500);
    $('#'+id2).animate({width:'20%'},500);
    $('#'+id3).animate({width:'20%'},500);
    $('#'+id4).animate({width:'20%'},500);
}



setInterval(function() {
    $('#slides').animate({left:'-85%'},10000);
    $('#slides').animate({left:'-85%'},5000);
    $('#slides').animate({left:'-140%'},10000);
    ('#slides').animate({left:'-140%'},5000);
    $('#slides').animate({left:'-85%'},10000);
    ('#slides').animate({left:'-85%'},5000);
    $('#slides').animate({left:0},10000);
  
  }, 5000);

function abrirTela(pasta,arquivo){
    let str = '../'+pasta+'/'+arquivo;
    location.href = str;
}