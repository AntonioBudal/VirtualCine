function mudarConfiguracao(config){
   
    $('#'+config).css("display", "flex");
    $('#'+config).siblings().css("display", "none");
}

function abrirTela(pasta,arquivo){
    let str = '../'+pasta+'/'+arquivo;
    location.href = str;
}