
$("#public-chat").on('click', ()=>{
    $("#private-items").hide();
    $("#public-items").show();
})
$("#private-chat").on('click', ()=>{
    $("#public-items").hide();
    $("#private-items").show();
})