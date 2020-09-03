/**
 * 
 * services.js
 * 
 * Autor : Leiner Ceballos 
 *  
 * Show options selected on services tab
 * 
 **/

$('body').on('click', '.button', function (event) {
    event.preventDefault();

    // select the category and remove the focus from the rest of them
    $(this).addClass('active').siblings().removeClass('active');

    var name = $(this).attr("data-filter");

    if(name == "all"){
        $('.filter').show("2000");
    }
    else{
        $('.filter').not("."+name).hide("2000");
        $('.filter').filter("."+name).show("2000");
    }

});
