function mudarConfiguracao(config){
   
    $('#'+config).css("display", "flex");
    $('#'+config).siblings().css("display", "none");
}

function abrirTela(pasta,arquivo){
    let str = '../'+pasta+'/'+arquivo;
    location.href = str;
}

function mudarE(){
    $('#e').css("display", "flex");
    $('#t').css("display", "none");
    $('#a').css("display", "none");
}


function mudarT(){
    $('#t').css("display", "flex");
    $('#a').css("display", "none");
    $('#e').css("display", "none");
}


function mudarA(){
    $('#a').css("display", "flex");
    $('#e').css("display", "none");
    $('#t').css("display", "none");
}

function fechar(id){
    $('#'+id).css("display", "none");
}

