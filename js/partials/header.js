// JS for partial: header\n
var statusMenu = false;
$('header .left button').on('click', ()=>{
    if(statusMenu === false){
        $('.open').addClass('hidden');
        $('.close').removeClass('hidden');
        $('.menu-content').slideDown();
        $('.header-partial-b3c1ef').addClass('fixed');
        statusMenu = true;
    }else{
        $('.open').removeClass('hidden');
        $('.close').addClass('hidden');
        $('.menu-content').slideUp();
        $('.header-partial-b3c1ef').removeClass('fixed');
        statusMenu = false;
    }
});
//  Show car 
$('.open-car').on('click', ()=>{
    $('body').addClass('wcspc-body-show');
    $('#wcspc-area').addClass('wcspc-area-show');
});