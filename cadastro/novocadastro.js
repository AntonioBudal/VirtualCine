function mudarForm(id){
    
    
    var i = 0;
    if(i > 0) {
        $('#form-container').animate({"height": "85%"},1000);
        i++;
    } else {
        $('#form-container').animate({"height": "85%"},1);
    }
    
    $('#'+id).css("display", "flex");
    
    $('#'+id).siblings().css("display", "none");
   
}