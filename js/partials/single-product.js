// JS for partial: single-product\n
var quantity = '';
var gallery = $('.gallery-slide.owl-carousel');
function gallerySlide(){
    gallery.owlCarousel({
        autoplay:false,
        loop:false,
        nav:false,
        dots:false,
        margin:0,
        items:1,
        animateOut: 'fadeOut',
        smartSpeed:1500,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
    }).css({'opacity':1});
}
$('.nav-controller').on('click', 'button', function(){
    var item = $(this).attr('data-target');
    // console.log(item);
    gallery.trigger('to.owl.carousel', item);
});
$('.zoom-trigger').each(function() {
    $(this).zoom({
        url: $(this).attr('href'),
        magnify: 3.5
    });
});
// Increment
$('.quantity .increment').on('click', function(e){
    quantity++;
    $('.quantity .qty').val(quantity);
    e.preventDefault();
});
// Decrement
$('.quantity .decrement').on('click', function(e){
    if(quantity > 1){
        quantity--;
    }
    $('.quantity .qty').val(quantity);
    e.preventDefault();
});
// Actualiza
$('.quantity .qty').on('input', function(){
    newValue = $(this).val();
    quantity = newValue;
});
// Relateds products
var related_products = $('.relateds-contain');
function related_products_slide(){
    related_products.owlCarousel({
        autoplay:false,
        loop:false,
        nav:false,
        dots:false,
        margin:50,
        responsive:{
            0:{
                autoplay:true,
                loop:true,
                items:2,
                margin:10
            },
            768:{
                items:4
            }
        }
    }).css({'opacity':1});
}
$(()=>{
    gallerySlide();
    quantity = $('.quantity .qty').val();
    related_products_slide();
});