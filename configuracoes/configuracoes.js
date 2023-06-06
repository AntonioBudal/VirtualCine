function mudarConfiguracao(config){
   
    $('#'+config).css("display", "flex");
    $('#'+config).siblings().css("display", "none");
}