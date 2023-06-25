function mudarForm(id){
    $('#'+id).css("display", "flex");
    $('#form-container').animate({"height": "85%"},1000);
    $('#'+id).siblings().css("display", "none");
}